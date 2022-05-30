@extends('admin.mainAdmin')


@section('content')

    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <a href="{{ 'admin/menus/listOrder' }}" class="text-secondary">Orders</a>
                            <span class="info-box-number">
                  {{$order}}
                  <small></small>
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-tshirt"></i></span>

                        <div class="info-box-content">
                            <a href="{{ 'admin/menus/listProduct' }}" class="text-secondary">Products</a>
                            <span class="info-box-number">
                  {{$product}}
                  <small></small>
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file-alt"></i></span>
                        <div class="info-box-content">
                            <a href="{{ 'admin/menus/listBlog' }}" class="text-secondary">Blog</a>
                            <span class="info-box-number">{{ $blog }}</span>
                        </div>

                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>


                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <a href="{{ 'admin/menus/listUsers' }}" class="text-secondary">Members</a>
                            <span class="info-box-number">{{$user}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-primary elevation-1"><i class="far fa-comment"></i></span>

                        <div class="info-box-content">
                            <a href="{{ 'admin/menus/listComment' }}" class="text-secondary">Comments</a>
                            <span class="info-box-number">{{$comment}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <!-- /.col -->
                                <div style="margin-right: 100px" class="col-md-5">
                                    <p class="text-center">
                                        <strong>Products by color</strong>
                                    </p>

                                    <div class="progress-group">
                                        Blue product
                                        <span class="float-right"><b>{{$product1}}</b>/{{$product}}</span>
                                        <div class="progress progress-sm">
                                            <?php
                                            $count = $product1 * 100 / $product  ;
                                            ?>
                                            <div class="progress-bar bg-primary" style="width:
                                            <?php   echo($count."%"); ?>

                                            "></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->

                                    <div class="progress-group">
                                        Brown product
                                        <span class="float-right"><b>{{$product2}}</b>/{{$product}}</span>
                                        <div class="progress progress-sm">
                                            <?php
                                            $count = $product2 * 100 / $product  ;
                                            ?>
                                            <div class="progress-bar" style="width:  <?php   echo($count."%"); ?>;background-color: saddlebrown;
                                            "></div>
                                        </div>
                                    </div>

                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        Gray product
                                        <span class="float-right"><b>{{$product3}}</b>/{{$product}}</span>
                                        <?php
                                        $count = $product3 * 100 / $product  ;
                                        ?>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" style="width: <?php   echo($count."%"); ?>;background-color: grey;
                                            "></div>
                                        </div>
                                    </div>

                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        Black product
                                        <span class="float-right"><b>{{$product4}}</b>/{{$product}}</span>
                                        <?php
                                        $count = $product4 * 100 / $product  ;
                                        ?>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-dark" style="width: <?php   echo($count."%"); ?>"></div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        White product
                                        <span class="float-right"><b>{{$product5}}</b>/{{$product}}</span>
                                        <?php
                                        $count = $product5 * 100 / $product  ;
                                        ?>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" style="width:  <?php   echo($count."%"); ?>;background-color: lightgrey;"></div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        Pink product
                                        <span class="float-right"><b>{{$product6}}</b>/{{$product}}</span>
                                        <?php
                                        $count = $product6 * 100 / $product  ;
                                        ?>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" style="width:  <?php   echo($count."%"); ?>;background-color: hotpink"></div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        Green product
                                        <span class="float-right"><b>{{$product7}}</b>/{{$product}}</span>
                                        <?php
                                        $count = $product7 * 100 / $product  ;
                                        ?>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" style="width:  <?php   echo($count."%"); ?>;background-color: green"></div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        Yellow product
                                        <span class="float-right"><b>{{$product8}}</b>/{{$product}}</span>
                                        <?php
                                        $count = $product8 * 100 / $product  ;
                                        ?>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" style="width:  <?php   echo($count."%"); ?>;background-color: yellow"></div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        Orange product
                                        <span class="float-right"><b>{{$product9}}</b>/{{$product}}</span>
                                        <?php
                                        $count = $product9 * 100 / $product  ;
                                        ?>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar " style="width:  <?php   echo($count."%"); ?>;background-color: orange"></div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        Red product
                                        <span class="float-right"><b>{{$product10}}</b>/{{$product}}</span>
                                        <?php
                                        $count = $product10 * 100 / $product  ;
                                        ?>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" style="width:  <?php   echo($count."%"); ?>;background-color: red"></div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        Purple product
                                        <span class="float-right"><b>{{$product11}}</b>/{{$product}}</span>
                                        <?php
                                        $count = $product11 * 100 / $product  ;
                                        ?>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar " style="width:  <?php   echo($count."%"); ?>;background-color: purple"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                </div>
                                <div class="col-md-5">
                                    <!-- Info Boxes Style 2 -->
                                    <div class="card-header">
                                        <h5 class="card-title">Hastags</h5>

                                    </div>

                                    <!-- /.info-box -->
                                    <div class="info-box mb-3 bg-success">
                                        <span class="info-box-icon"><i class="fas fa-tag"></i></span>

                                        <div class="info-box-content">
                                            <a href="{{ 'admin/menus/listHastagProduct' }}" class="text-light">Product Hastags</a>

                                            <span class="info-box-number">{{$hastagProduct}}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->

                                    <!-- /.info-box -->
                                    <div class="info-box mb-3 bg-info">
                                        <span class="info-box-icon"><i class="fas fa-tag"></i></span>
                                        <div class="info-box-content">
                                            <a href="{{ 'admin/menus/listHastagBlog' }}" class="text-light">Blog Hastags</a>

                                            <span class="info-box-number">{{$hastagBlog}}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->

                                    <!-- /.card -->

                                    <!-- PRODUCT LIST -->
                                    <!-- /.card -->
                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/. container-fluid -->
    </section>

@endsection
