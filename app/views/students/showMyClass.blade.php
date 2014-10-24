@extends('after_login.layouts.master')

@section('main_content')
    <section>
        <ol class="breadcrumb">
            @foreach($named_route_token_array as $index => $element)

            @if($index == 0)
            <li><a href="{{ URL::to('/'); }}">Home</a></li>
            <?php $temp_string = $element; ?>
            @else
            <?php $temp_string = $temp_string.'.'.$element; ?>
            @endif

            @if($index == count($named_route_token_array) - 1)
            <li class="active">{{ $element; }}</li>
            @else
            <li><a href="{{ URL::route($temp_string); }}">{{ $element; }}</a></li>
            @endif

            @endforeach
        </ol>
        <div class="section-header">
            <h3 class="text-standard"><i class="fa fa-fw fa-arrow-circle-right text-gray-light"></i> 내 클래스 <small>전체보기</small></h3>
        </div>
        <div class="section-body">
            <div class="row">
                <!-- START STRIPED TABLE -->
                <div class="col-lg-6">
                    <div class="box box-outlined">
                        <div class="box-head style-primary">
                            <header><h4 class="text-light">Table <strong>Striped</strong></h4></header>
                        </div>
                        <div class="box-body no-padding">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Progress</th>
                                        <th class="text-right1" style="width:90px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="label label-success">Online</span></td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><div class="progress no-margin"><div class="progress-bar progress-bar-support1" style="width: 80%"></div></div></td>
                                        <td class="text-right">
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Copy row"><i class="fa fa-copy"></i></button>
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-danger">Offline</span></td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td><div class="progress no-margin"><div class="progress-bar progress-bar-support2" style="width: 15%"></div></div></td>
                                        <td class="text-right">
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Copy row"><i class="fa fa-copy"></i></button>
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-danger">Offline</span></td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td><div class="progress no-margin"><div class="progress-bar progress-bar-support3" style="width: 50%"></div></div></td>
                                        <td class="text-right">
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Copy row"><i class="fa fa-copy"></i></button>
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div><!--end .box-body -->
                    </div><!--end .box -->
                </div><!--end .col-lg-6 -->
                <!-- END STRIPED TABLE -->

                <!-- START BANDED TABLE -->
                <div class="col-lg-6">
                    <div class="box box-outlined">
                        <div class="box-head style-primary">
                            <header><h4 class="text-light">Table <strong>Banded</strong></h4></header>
                        </div>
                        <div class="box-body no-padding">
                            <table class="table table-hover table-banded no-margin">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th style="width:90px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button type="button" class="btn btn-xs btn-inverse btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-xs btn-inverse btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Copy row"><i class="fa fa-copy"></i></button>
                                            <button type="button" class="btn btn-xs btn-danger btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>
                                            <button type="button" class="btn btn-xs btn-inverse btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-xs btn-inverse btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Copy row"><i class="fa fa-copy"></i></button>
                                            <button type="button" class="btn btn-xs btn-danger btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td>
                                            <button type="button" class="btn btn-xs btn-inverse btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-xs btn-inverse btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Copy row"><i class="fa fa-copy"></i></button>
                                            <button type="button" class="btn btn-xs btn-danger btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--end .box-body -->
                    </div><!--end .box -->
                </div><!--end .col-lg-6 -->
                <!-- END BANDED TABLE -->

            </div><!--end .row -->
            <!-- START BASIC TABLE -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <div class="box-head style-primary">
                            <header><h4 class="text-light">Table <strong>Basic</strong></h4></header>
                        </div>
                        <div class="box-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Progress</th>
                                        <th class="text-right1" style="width:90px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="label label-success">Online</span></td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><div class="progress no-margin"><div class="progress-bar progress-bar-success" style="width: 80%"></div></div></td>
                                        <td class="text-right">
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Copy row"><i class="fa fa-copy"></i></button>
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-danger">Offline</span></td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td><div class="progress no-margin"><div class="progress-bar progress-bar-danger" style="width: 15%"></div></div></td>
                                        <td class="text-right">
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Copy row"><i class="fa fa-copy"></i></button>
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-danger">Offline</span></td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td><div class="progress no-margin"><div class="progress-bar progress-bar-warning" style="width: 50%"></div></div></td>
                                        <td class="text-right">
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Copy row"><i class="fa fa-copy"></i></button>
                                            <button type="button" class="btn btn-xs btn-default btn-equal" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--end .box-body -->
                    </div><!--end .box -->
                </div><!--end .col-lg-12 -->
            </div>
            <!-- END BASIC TABLE -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="box" style="background-color: white;">
                        <div class="box-head style-primary">
                            <header>
                                <h3 class="text-light">Site <strong>visits</strong></h3>
                                <small class="opacity-75">People who visited this site</small>
                            </header>
                            <div class="tools stick-top-right">
                                <div class="btn-group btn-group-transparent">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-equal btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-flask"></i></a>
                                        <ul class="dropdown-menu animation-dock pull-right menu-box-styling" role="menu" style="text-align: left;">
                                            <li><a href="javascript:void(0);" data-style="style-primary">Style primary</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-info">Style info</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-success">Style success</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-warning">Style warning</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-danger">Style danger</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-inverse">Style inverse</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-support1">Style support 1</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-support2">Style support 2</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-support3">Style support 3</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-support4">Style support 4</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-support5">Style support 5</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-support1-gradient">Style support-gradient 1</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-support2-gradient">Style support-gradient 2</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-support3-gradient">Style support-gradient 3</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-support4-gradient">Style support-gradient 4</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-support5-gradient">Style support-gradient 5</a></li>
                                            <li><a href="javascript:void(0);" data-style="style-primary-gradient">Style primary-gradient</a></li>
                                        </ul>
                                    </div>
                                    <a class="btn btn-equal btn-sm btn-refresh"><i class="fa fa-refresh"></i></a>
                                    <a class="btn btn-equal btn-sm btn-collapse"><i class="fa fa-angle-down"></i></a>
                                    <a class="btn btn-equal btn-sm btn-close"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <div id="visitor-chart" class="flot height-5" data-title="Site visits" data-color="#ffffff,#f8576c"></div>
                        </div>
                        <div class="box-body style-body">
                            <div class="col-sm-5">
                                <div class="pie-chart flot">
                                    <div class="chart size-3 v-inline-middle" data-title="Site visits" data-color="#6bafbd,#f8576c"></div>
                                    <div class="legend v-inline-middle"></div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <br><br>
                                <div class="width-5 pull-right">
                                    <div class="pull-left">
                                        <span class="text-sm text-muted">My balans &nbsp;&nbsp;</span><br>
                                        <span class="text-bold">33,896.50 &nbsp;&nbsp;</span>
                                    </div>
                                    <span class="inlinesparkline" data-type="bar" data-height="33" data-bar-color="#6bafbd">3,2,1,11,9,5,3,4,2,6,5,2,6,2</span>
                                </div>
                                <div class="width-5 pull-right">
                                    <div class="pull-left">
                                        <span class="text-sm text-muted">New Orders &nbsp;&nbsp;</span><br>
                                        <span class="text-bold">17,555 &nbsp;&nbsp;</span>
                                    </div>
                                    <span class="inlinesparkline" data-type="bar" data-height="33" data-bar-color="#f8576c">6,5,2,6,2,4,5,1,3,2,1,11,9,5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- START CONDENSED TABLE -->
                <div class="col-lg-6">
                    <div class="box box-outlined">
                        <div class="box-head style-primary">
                            <header><h4 class="text-light">Table <strong>Condensed</strong></h4></header>
                        </div>
                        <div class="box-body">
                            <table class="table table-condensed table-hover no-margin">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Laurie</td>
                                        <td>Hart</td>
                                        <td>@lau</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Kristin</td>
                                        <td>Poole</td>
                                        <td>@kri</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Melvin</td>
                                        <td>Vega</td>
                                        <td>@vega</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--end .box-body -->
                    </div><!--end .box -->
                </div><!--end .col-lg-6 -->
                <!-- END CONDENSED TABLE -->

            </div>
            <div class="row">
                <!-- START CONTEXTUAL TABLE -->
                <div class="col-lg-6">
                    <div class="box box-outlined">
                        <div class="box-head style-primary">
                            <header><h4 class="text-light">Table <strong>Contextual</strong></h4></header>
                        </div>
                        <div class="box-body">
                            <table class="table no-margin table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Column heading</th>
                                        <th>Column heading</th>
                                        <th>Column heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>2</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                    </tr>
                                    <tr class="active">
                                        <td>3</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                    </tr>
                                    <tr class="success">
                                        <td>4</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>5</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--end .box-body -->
                    </div><!--end .box -->
                </div><!--end .col-lg-6 -->
                <!-- END CONTEXTUAL TABLE -->

                <!-- START CONTEXTUAL TABLE ROWS -->
                <div class="col-lg-6">
                    <div class="box box-outlined">
                        <div class="box-head style-primary">
                            <header><h4 class="text-light">Table <strong>Contextual rows</strong></h4></header>
                        </div>
                        <div class="box-body">
                            <table class="table no-margin table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Active</th>
                                        <th>Success</th>
                                        <th>Warning</th>
                                        <th>Danger</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="warning">Warning</td>
                                        <td class="active">Active</td>
                                        <td class="success">Success</td>
                                        <td class="danger">Danger</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="warning">Warning</td>
                                        <td class="active">Active</td>
                                        <td class="success">Success</td>
                                        <td class="danger">Danger</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="warning">Warning</td>
                                        <td class="active">Active</td>
                                        <td class="success">Success</td>
                                        <td class="danger">Danger</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="warning">Warning</td>
                                        <td class="active">Active</td>
                                        <td class="success">Success</td>
                                        <td class="danger">Danger</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td class="warning">Warning</td>
                                        <td class="active">Active</td>
                                        <td class="success">Success</td>
                                        <td class="danger">Danger</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--end .box-body -->
                    </div><!--end .box -->
                </div><!--end .col-lg-6 -->
                <!-- END CONTEXTUAL TABLE ROWS -->

            </div>
        </div>
    </section>
@stop
