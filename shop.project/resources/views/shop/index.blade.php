@extends('shop.layouts.app')

@section('title')
    Главная страница магазина
@endsection

@section('slider')

@endsection

@section('content')
    <div class="col-md-9">
        <div class="shoe">
            <img class="img-responsive" src="{{asset('shop')}}/images/banner.jpg" alt="" >
            <div class="shop">
                <h4>SHOP <span>WOMEN</span></h4>
                <p>SHOES FALL 2014</p>
            </div>
        </div>
        <div class="content-bottom">
            <h3>Featured products</h3>
            <div class="bottom-grid">
                <div class="col-md-4 shirt">
                    <div class="bottom-grid-top">
                        <a href="single.html"><img class="img-responsive" src="{{asset('shop')}}/images/sh.png" alt="" >
                            <div class="five">
                                <h6 >-50%</h6>
                            </div>
                            <div class="pre">
                                <p>Pure Slim Xe</p>
                                <span>$60.00</span>
                                <div class="clearfix"> </div>
                            </div></a>


                    </div>
                </div>
                <div class="col-md-4 shirt">
                    <div class="bottom-grid-top">
                        <a href="single.html"><img class="img-responsive" src="{{asset('shop')}}/images/sh2.png" alt="" >
                            <div class="five">
                                <h6 class="one" >-50%</h6>
                            </div>
                            <div class="pre">
                                <p>Pure Slim Xe</p>
                                <span>$60.00</span>
                                <div class="clearfix"> </div>
                            </div></a>


                    </div>
                </div>
                <div class="col-md-4 shirt">
                    <div class="bottom-grid-top">
                        <a href="single.html"><img class="img-responsive" src="{{asset('shop')}}/images/sh1.png" alt="" >
                            <div class="five">
                                <h6 class="one1" >-50%</h6>
                            </div>
                            <div class="pre">
                                <p>Pure Slim Xe</p>
                                <span>$60.00</span>
                                <div class="clearfix"> </div>
                            </div></a>


                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="bottom-grid">
                <div class="col-md-4 shirt">
                    <div class="bottom-grid-top">
                        <a href="single.html"><img class="img-responsive" src="{{asset('shop')}}/images/sh2.png" alt="" >
                            <div class="five">
                                <h6 class="one" >-50%</h6>
                            </div>
                            <div class="pre">
                                <p>Pure Slim Xe</p>
                                <span>$60.00</span>
                                <div class="clearfix"> </div>
                            </div></a>


                    </div>
                </div>
                <div class="col-md-4 shirt">
                    <div class="bottom-grid-top">
                        <a href="single.html"><img class="img-responsive" src="{{asset('shop')}}/images/sh3.png" alt="" >
                            <div class="five">
                                <h6 class="one1">-50%</h6>
                            </div>
                            <div class="pre">
                                <p>Pure Slim Xe</p>
                                <span>$60.00</span>
                                <div class="clearfix"> </div>
                            </div></a>


                    </div>
                </div>
                <div class="col-md-4 shirt">
                    <div class="bottom-grid-top">
                        <a href="single.html"><img class="img-responsive" src="{{asset('shop')}}/images/sh4.png" alt="" >
                            <div class="five">
                                <h6 >-50%</h6>
                            </div>
                            <div class="pre">
                                <p>Pure Slim Xe</p>
                                <span>$60.00</span>
                                <div class="clearfix"> </div>
                            </div></a>


                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="bottom-grid">
                <div class="col-md-4 shirt">
                    <div class="bottom-grid-top">
                        <a href="single.html"><img class="img-responsive" src="{{asset('shop')}}/images/sh5.png" alt="" >
                            <div class="five">
                                <h6 class="one1">-50%</h6>
                            </div>
                            <div class="pre">
                                <p>Pure Slim Xe</p>
                                <span>$60.00</span>
                                <div class="clearfix"> </div>
                            </div></a>


                    </div>
                </div>
                <div class="col-md-4 shirt">
                    <div class="bottom-grid-top">
                        <a href="single.html"><img class="img-responsive" src="{{asset('shop')}}/images/sh.png" alt="" >
                            <div class="five">
                                <h6 >-50%</h6>
                            </div>
                            <div class="pre">
                                <p>Pure Slim Xe</p>
                                <span>$60.00</span>
                                <div class="clearfix"> </div>
                            </div></a>


                    </div>
                </div>
                <div class="col-md-4 shirt">
                    <div class="bottom-grid-top">
                        <a href="single.html"><img class="img-responsive" src="{{asset('shop')}}/images/sh2.png" alt="" >
                            <div class="five">
                                <h6 class="one">-50%</h6>
                            </div>
                            <div class="pre">
                                <p>Pure Slim Xe</p>
                                <span>$60.00</span>
                                <div class="clearfix"> </div>
                            </div></a>


                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <ul class="start">
            <li><span>1</span></li>
            <li class="arrow"><a href="#">2</a></li>
            <li class="arrow"><a href="#">3</a></li>
            <li class="arrow"><a href="#">4</a></li>
            <li class="arrow"><a href="#">5</a></li>
            <li class="arrow"><a href="#">6</a></li>
        </ul>
    </div>
    @endsection