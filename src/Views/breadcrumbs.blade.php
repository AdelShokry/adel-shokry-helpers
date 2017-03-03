<div class="page-bar">
    <ul class="page-breadcrumb">
    @foreach ($breadcrumbs as $key => $breadcrumb)

    @if ($breadcrumb['url'] == '')
        <li> 
        @if (isset($breadcrumb['icon']))
            <span class="{{ $breadcrumb['icon'] }}"></span>  
        @endif
            <span>{{ $breadcrumb['name'] }}</span> 
        </li>
    @else
        <li>
            <a href="{{ $breadcrumb['url'] }}">
        @if (isset($breadcrumb['icon']))
            <span class="{{ $breadcrumb['icon'] }}"></span>  
        @endif
               {{ $breadcrumb['name'] }}
            </a>
            <?php $align = app()->getLocale() == 'en' ? 'right' : 'left'; ?>
            <i class="fa fa-angle-{{ $align }}"></i>
        </li>
    @endif

    @endforeach
    </ul>  
    @if ($edit)
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <a href="{{ url()->current().'/edit' }}" type="button" class="btn green btn-sm btn-outline " > {{ trans('lang.edit') }}
            </a>
        </div>
    </div>
    @endif                    
</div>