<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class View extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:view {name} {path=null}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command Used To Set Recource Views Files With Data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->viewIndex();
        $this->viewCreate();
        $this->viewEdit();
        $this->viewShow();
    }
    public function createPath($path=null)
    {
        if (!is_null($path)) 
        {
            $path = str_replace('\\', '/', $path);
            $pathArray = explode('/', $path);

            $d ='';
            $paths = [];
            foreach ($pathArray as $key => $dir) {
                $d .= $key == 0 ? $dir : '/'.$dir;
                $paths[] = $d;
            }
            foreach ($paths as $folder) 
            {
                if (!is_dir($folder)) 
                {
                    @mkdir($folder);
                }
            }
        }
    }

    public function viewIndex()
    {
        if ($this->argument('path') == 'null') 
        {
            $path = base_path('resources/views').'/'.str_plural(snake_case($this->argument('name')));
        }else{
            
            $path = base_path('resources/views').'/'.$this->argument('path').'/'.str_plural(snake_case($this->argument('name')));

        }
        if (!is_dir($path)) 
        {
            $this->createPath($path);
            $this->info('Folder ('.str_plural(snake_case($this->argument('name'))).') Was Created Successfuly.');
        }else{
            $this->error('Folder ('.str_plural(snake_case($this->argument('name'))).') already Exist!');
        }
            
$data = '@extends(\'layout.index\')
@section(\'title\') {{ trans(\'lang.'.str_plural(snake_case($this->argument('name'))).'\') }}  @endsection
@section(\'menu\') {!! getBreadcrumbs(\''.str_singular(snake_case($this->argument('name'))).'\')->index !!}  @endsection
@section(\'content\')
<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet light bordered">
    <div class="portlet-title">
  {!! Btn::deleteAll() !!}  {!! Btn::create() !!}
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover datatable" width="100%">
            <thead>
                <tr>
                    <th class="text-center">{!! bsForm::deleteAllSelect() !!}</th>
                     <th>{{ trans(\'lang.name\') }}</th>
                     <th>{{ trans(\'lang.created_at\') }}</th>
                     <th>{{ trans(\'lang.actions\') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach($'.str_plural(snake_case($this->argument('name'))).' as $'.str_singular(snake_case($this->argument('name'))).')
            <tr>
                <td class="text-center">{!! bsForm::deleteSelect($'.str_singular(snake_case($this->argument('name'))).'->id) !!}</td>
                 <td>{{ $'.str_singular(snake_case($this->argument('name'))).'->trans(\'name\') }}</td>
                 <td>{{ date(\'Y/m/d\',strtotime($'.str_singular(snake_case($this->argument('name'))).'->created_at)) }}</td>
                 <td>
                     {!! Btn::view($'.str_singular(snake_case($this->argument('name'))).'->id) !!}
                     {!! Btn::edit($'.str_singular(snake_case($this->argument('name'))).'->id) !!}
                     {!! Btn::delete($'.str_singular(snake_case($this->argument('name'))).'->id,$'.str_singular(snake_case($this->argument('name'))).'->trans(\'name\')) !!}
                 </td>
            </tr>
            @endforeach
                
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->


@endsection';
        if (!file_exists($path.'/index.blade.php')) 
        {
            $file = fopen($path.'/index.blade.php', "w");
            fwrite($file, $data);
            fclose($file);
            $this->info('File (index.blade.php) Was Created Successfuly.');
        }else{
            $this->error('File (index.blade.php) already Exist!');
        }
    }









    
    public function viewCreate()
    {
        if ($this->argument('path') == 'null') 
        {
            $path = base_path('resources/views').'/'.str_plural(snake_case($this->argument('name')));
        }else{
            
            $path = base_path('resources/views').'/'.$this->argument('path').'/'.str_plural(snake_case($this->argument('name')));

        }
            
$data = '@extends(\'layout.index\')
@section(\'title\') {{ trans(\'lang.'.str_plural(snake_case($this->argument('name'))).'\') }}  @endsection
@section(\'menu\') {!! getBreadcrumbs(\''.str_singular(snake_case($this->argument('name'))).'\')->create !!}  @endsection
@section(\'content\')
{!! bsForm::start([\'route\'=>\''.str_plural(snake_case($this->argument('name'))).'.store\',\'title\'=>\''.str_singular(snake_case($this->argument('name'))).'_info\']) !!}
    
    {!! bsForm::translate(function($form){

        $form->text(\'name\');
        $form->textarea(\'content\',null,[\'class\'=>\'editor form-control\']);

    }) !!}

    {!! bsForm::text(\'tags\') !!}

    {!! bsForm::end([\'submit\'=>\'save\']) !!}
@endsection';
        if (!file_exists($path.'/create.blade.php')) 
        {
            $file = fopen($path.'/create.blade.php', "w");
            fwrite($file, $data);
            fclose($file);
            $this->info('File (create.blade.php) Was Created Successfuly.');
        }else{
            $this->error('File (create.blade.php) already Exist!');
        }
    }  







    public function viewEdit()
    {
        if ($this->argument('path') == 'null') 
        {
            $path = base_path('resources/views').'/'.str_plural(snake_case($this->argument('name')));
        }else{
            
            $path = base_path('resources/views').'/'.$this->argument('path').'/'.str_plural(snake_case($this->argument('name')));

        }
            
$data = '@extends(\'layout.index\')
@section(\'title\') {{ trans(\'lang.'.str_plural(snake_case($this->argument('name'))).'\') }}  @endsection
@section(\'menu\') {!! getBreadcrumbs(\''.str_singular(snake_case($this->argument('name'))).'\',$'.str_singular(snake_case($this->argument('name'))).'->id)->edit !!}  @endsection
@section(\'content\')
{!! bsForm::start([\'route\'=>[\''.str_plural(snake_case($this->argument('name'))).'.update\',$'.str_singular(snake_case($this->argument('name'))).'->id],\'method\'=>\'put\',\'title\'=>\''.str_singular(snake_case($this->argument('name'))).'_info\']) !!}
    
    {!! bsForm::translate(function($form,$lang) use($'.str_singular(snake_case($this->argument('name'))).'){

        $form->text(\'name\',$'.str_singular(snake_case($this->argument('name'))).'->trans(\'name\',$lang));
        $form->textarea(\'content\',$'.str_singular(snake_case($this->argument('name'))).'->trans(\'content\',$lang),[\'class\'=>\'editor form-control\']);

    }) !!}

    {!! bsForm::text(\'tags\',$'.str_singular(snake_case($this->argument('name'))).'->tags) !!}

    {!! bsForm::end([\'submit\'=>\'save\']) !!}
@endsection';
        if (!file_exists($path.'/edit.blade.php')) 
        {
            $file = fopen($path.'/edit.blade.php', "w");
            fwrite($file, $data);
            fclose($file);
            $this->info('File (edit.blade.php) Was Created Successfuly.');
        }else{
            $this->error('File (edit.blade.php) already Exist!');
        }
    }



    public function viewShow()
    {
        if ($this->argument('path') == 'null') 
        {
            $path = base_path('resources/views').'/'.str_plural(snake_case($this->argument('name')));
        }else{
            
            $path = base_path('resources/views').'/'.$this->argument('path').'/'.str_plural(snake_case($this->argument('name')));

        }
            
$data = '@extends(\'layout.index\')
@section(\'title\') {{ trans(\'lang.'.str_plural(snake_case($this->argument('name'))).'\') }}  @endsection
@section(\'menu\') {!! getBreadcrumbs(\''.str_singular(snake_case($this->argument('name'))).'\',$'.str_singular(snake_case($this->argument('name'))).'->id)->show !!}  @endsection
@section(\'content\')

<div class="note note-info">
    <p>{!! $'.str_singular(snake_case($this->argument('name'))).'->trans(\'info\') !!}</p>
</div>
 
@endsection';
        if (!file_exists($path.'/show.blade.php')) 
        {
            $file = fopen($path.'/show.blade.php', "w");
            fwrite($file, $data);
            fclose($file);
            $this->info('File (show.blade.php) Was Created Successfuly.');
        }else{
            $this->error('File (show.blade.php) already Exist!');
        }
    }
}
