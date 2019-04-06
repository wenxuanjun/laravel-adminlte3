<div class="card">
    @if(isset($title))
        <div class="card-header">
            <h3 class="card-title"> {{ $title }}</h3>
        </div>
    @endif

    @if ( $grid->allowTools() || $grid->allowExport() || $grid->allowCreation() )
        <div class="card-header">
            <div class="float-right" style="margin-right: -10px;">
                {!! $grid->renderExportButton() !!}
                {!! $grid->renderCreateButton() !!}
            </div>
            @if ( $grid->allowTools() )
            <span>
                {!! $grid->renderHeaderTools() !!}
            </span>
            @endif
        </div>
    @endif

    {!! $grid->renderFilter() !!}

    <div class="card-body table-responsive no-padding">
        <table class="table table-hover">
            <thead>
                <tr>
                    @foreach($grid->columns() as $column)
                    <th>{{$column->getLabel()}}{!! $column->sorter() !!}</th>
                    @endforeach
                </tr>
            </thead>

            <tbody>
                @foreach($grid->rows() as $row)
                <tr {!! $row->getRowAttributes() !!}>
                    @foreach($grid->columnNames as $name)
                    <td {!! $row->getColumnAttributes($name) !!}>
                        {!! $row->column($name) !!}
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    {!! $grid->renderFooter() !!}

    <div class="card-footer clearfix">
        {!! $grid->paginator() !!}
    </div>
</div>