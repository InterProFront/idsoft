@section('header')
    <header @if($shadow) class="shadow" @else @endif>
        <div class="info-row">
            <div class="col-1-3">
                <div class="wrap">
                    <img src="/img/h_mail.png" alt="">
                </div>
                <ul class="head-list">
                    <li class="item">
                        <a href="#ask">Написать письмо</a>
                    </li>
                    <li class="item">
                        <a href="#">Как нас найти</a>
                    </li>
                </ul>
            </div>
            <div class="col-1-3">
                <div class="logo-block">
                    <img src="/images/{{$static->logo_image->primary_link}}" alt="{{$static->logo_image->alt}}" class="logo">
                </div>
            </div>
            <div class="col-1-3 reverse">
               <ul class="head-list">
                   <?php $i = 0;?>
                   @foreach($static->phones_group as $item)
                       <?php $i++?>
                       @if($i == 1)
                           <li class="item">
                               <p>+7 (727)<span class="bold"> {{$item->phone_field}}</span></p>
                           </li>
                       @else
                           <li class="item">
                               <p>{{$item->phone_field}}</p>
                           </li>
                       @endif
                   @endforeach
                </ul>
                <div class="wrap">
                    <img src="/img/h_call.png" alt="">
                </div>
            </div>
        </div>
        <nav class="main-menu">
            <div class="mobile-menu-wrap">
                <div class="button-wrap">
                    <button class="mobile-button">☰</button>
                </div>
                <div class="wrap">
                    <ul class="big-menu">
                        <?php $i = 0 ?>
                        @foreach($menu->menu_group as $item)
                            <?php $i++ ?>
                            @if ($i <= 3)
                                <li class="menu-item">
                                    <span class="hovered-text">{{$item->small_text_field}}</span>
                                    <a href="{{$link[$i-1]}}">{{$item->menu_text_field}}</a>
                                    @if($i == 3)
                                        <div class="popup-form right-pull">
                                    @else
                                        <div class="popup-form">
                                    @endif
                                        <h3 class="popup-title">{{$item->menu_text_field}}</h3>
                                        <div class="popup-items">
                                            <ul class="popup-list">
                                                @include('front.main_menu')
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    <ul class="small-menu">
                        <?php $i = 0  ?>
                        @foreach($menu->menu_group as $item)
                            <?php $i++ ?>
                            @if ($i>3)
                                    <li class="menu-item">
                                        <a href="{{$link[$i-1]}}">{{$item->menu_text_field}}</a>
                                        @if($i == 6)
                                            <div class="popup-form right-pull">
                                        @else
                                            <div class="popup-form">
                                        @endif
                                            <h3 class="popup-title">{{$item->menu_text_field}}</h3>
                                            <div class="popup-items">
                                                <ul class="popup-list">
                                                    @include('front.main_menu')
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </header>
@endsection