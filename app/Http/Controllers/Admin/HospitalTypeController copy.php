<?php

namespace App\Http\Controllers\Admin;

use App\Mangers\DataTableManger;
use App\Models\HospitalType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HospitalTypeController extends BaseController
{
    public function init()
    {
        view()->share(['module_title' => 'HospitalType','route' => 'admin.hospital_type']);
    }

    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = dataTable()
                ->of( HospitalType::query() )
                ->filterColumns(['id', 'slug'])
                ->each(function ($row) {
                    return [
                        $row->id,
                        isset($row->translate('ar')->name)?$row->translate('ar')->name:'',
                        isset($row->translate('en')->name)?$row->translate('en')->name:'',

                        date('d-m-Y', strtotime($row->updated_at)),
                        table_actions([
                            'edit' => ['admin.hospital_type.edit', ['id' => $row->id]],
                            //'copy' => ['admin.hospital_type.copy', ['id' => $row->id]],
                            'delete' => ['admin.hospital_type.delete', ['id' => $row->id]]
                        ])
                    ];
                })
                ->rows()
            ;
//dd($data);

            return $data;
        }

        return view($this->getTemplatePath('index'));
    }

    public function create()
    {
        view()->share(['action_title' => 'Create']);

        return view($this->getTemplatePath('create'));
    }

    public function edit($id)
    {
        view()->share(['action_title' => 'Edit']);

        $item = HospitalType::findOrFail($id);

        return view($this->getTemplatePath('edit'), ['item' => $item]);
    }

    public function store(Request $request)
    {
        $id = $request->item_id;
        $postData = $request->except('_token');

        $request->validate([
            'ar.name' => 'required|max:255',
            'en.name' => 'required|max:255',
        ]);

        if($id)
        {
            $row = HospitalType::findOrFail($id);
            $row->update($postData);
        }
        else
        {
            $row = HospitalType::create($postData);
        }

        if($request->hasFile('image'))
        {
            $image = $this->moveFile($request->file('image') , 'hospital_type/');
            $row->image = $image;
            $row->save();
        }

        if($request->has('image_delete'))
        {
            $row->image = '';
            $row->save();
        }

        $redirctMsg = [
            'flash_message' => trans('admin.save_success_message') ,
            'flash_type' => 'success' ,
        ];

        if($request->input('saveNew'))
            return redirect(route('admin.hospital_type.create'))->with($redirctMsg);

        return redirect(route('admin.hospital_type.index'))->with($redirctMsg);
    }

    public function delete($id)
    {
        $row = HospitalType::findOrFail($id);
        $row->delete();

        return redirect(route('admin.hospital_type.index'))->with([
            'flash_message' => trans('admin.delete_success_message') ,
            'flash_type' => 'success' ,
        ]);
    }

    /*public function copy($id)
    {
        $row = HospitalType::findOrFail($id);

        $new = $row->replicateWithTranslations();
        $new->save();

        return redirect(route('admin.hospital_type.index'))->with([
            'flash_message' => trans('admin.copy_success_message') ,
            'flash_type' => 'success' ,
        ]);
    }*/

    public function getTemplateFolder()
    {
        return 'hospital_type';
    }
}
