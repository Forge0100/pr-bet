@extends('template.main')

@section('title')
  iArtem | Создание сайтов под ключ
@stop

@section('content')
<!-- Navs-->
    <section id="navs" style="display:none;" class="wow fadeInLeft">
      <nav role="navigation" class="navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#bs-example-colapse-1" class="navbar-toggle collapsed"><span class="sr-only">Toogle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#top" class="navbar-brand">Artem Gavrylenko</a>
          </div>
          <div id="bs-example-colapse-1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#services">Услуги</a></li>
              <li><a href="#works">Портфолио</a></li>
              <li><a href="#contact">Контакты</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- Header-->
    <header id="top" class="header">
      <div class="text-vertical-center">
        <h1><i class="logo"></i></h1>
        <h3>Создание сайтов под ключ</h3><br><a href="#contact" class="btn btn-green-light btn-lg">Заказать обратный вызов</a><br><br><a href="#services" class="btn btn-dark btn-lg">Узнать подробнее...</a>
      </div>
    </header>
    <!-- Line 1-->
    <section id="line-1" class="line-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 data-wow-delay="0.3s" class="wow fadeInLeft">Наши услуги</h2>
            <p data-wow-delay="0.3s" class="lead wow fadeInRight">Разработка сайтов визиток, сайтов интернет магазинов, бизнес сайтов, landing page, сайтов с универсальным функционалом и многие другие по <b>низким ценам</b>.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Services-->
    <section id="services" class="services bg-primary">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12"><i class="fa fa-suitcase fa-2x"></i>
            <h2 data-wow-delay="0.3s" class="wow fadeInLeft">Предоставляемые мной услуги</h2>
            <p data-wow-delay="0.3s" class="lead wow fadeInRight">Все услуги которые я могу вам предоставить находятся ниже</p><br>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-10 col-lg-offset-2">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="service-item"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-edit fa-stack-1x text-primary"></i></span>
                  <h4>Дизайн</h4>
                  <p> Создание оригинального и красивого дизайна по прототипу или Т3</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-cubes fa-stack-1x text-primary"></i></span>
                  <h4>Верстка сайта</h4>
                  <p> Создание шаблона сайта по отведенному дизайну</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-code fa-stack-1x text-primary"></i></span>
                  <h4>Программирование</h4>
                  <p> Создание сайтов с использованием популярного фреймфорка Laravel</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Line 2           -->
    <section id="line-2" class="line-2">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12">
            <h2 data-wow-delay="0.3s" class="wow fadeInLeft">Специальное предложение</h2>
            <p data-wow-delay="0.3s" class="lead wow fadeInRight">Предложите нашу работу вашему другу и получите 10% на заказы</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio Works-->
    <section id="works" class="works bg-green"> 
      <div class="container">
        <div data-wow-delay="0.3s" class="row wow fadeInRight">
          <div class="col-lg-12">
            <h2 class="cl-white">Портфолио</h2>
            <p class="lead cl-white">Все мои работы распологаются ниже</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div id="filters-container">
              <button data-filter="*" class="cbp-filter-item cbp-filter-item-active">Всё</button>
              <button data-filter=".design" class="cbp-filter-item">Дизайн</button>
              <button data-filter=".site" class="cbp-filter-item">Сайты</button>
              <button data-filter=".logo" class="cbp-filter-item">Логотипы</button>
            </div>
          </div>
        </div><br>
        <div data-wow-delay="0.3s" class="row wow zoomInUp">
          <div class="col-lg-12">
            <div id="grid-container">
              <ul>
                <li class="cbp-item design">
                  <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap"><img src="/img/UFOTemplate.jpg" alt=""></div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <a href="/img/UFOTemplate.jpg" rel="nofollow" target="_blank" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Дизайн на конкурс world-it-planet.org">Посмотреть</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="cbp-item site">
                  <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap"><img src="/img/ApartHotel.png" alt=""></div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <a href="/img/ApartHotel.png" rel="nofollow" target="_blank" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Главная страница Апарт Отеля">Посмотреть</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="cbp-item logo">
                  <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap"><img src="img/CloudWay.png" alt=""></div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <a href="img/CloudWay.png" rel="nofollow" target="_blank" class="cbp-lightbox cbp-l-caption-buttonRight">Посмотреть</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="cbp-item logo">
                  <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap"><img src="img/Intro.jpg" alt=""></div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <a href="img/Intro.jpg" rel="nofollow" target="_blank" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Интро изображени на конкурс world-it-planet.org">Посмотреть</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Line 3-->
    <section id="line-3" class="line-3">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12"><i class="fa fa-group fa-2x cl-white"></i>
            <h2 data-wow-delay="0.3s" class="cl-white wow fadeInLeft">Сотрудничество</h2>
            <p data-wow-delay="0.8s" class="lead cl-green-see text-shadow wow fadeInRight">Вы можете предложыть мне свою кандидатуру на место PR-менеджера, дизайнера, верстальщика или PHP программиста</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Line 4-->
    <section id="line-4" class="line-4">
      <div class="container">
        <div class="row text-center">
          <h2 data-wow-delay="0.3s" class="wow fadeInLeft">Создание сайта</h2>
          <p data-wow-delay="0.3s" class="lead wow fadeInRight">Почему так важно доручить разработку сайта опытномой команде?</p>
        </div>
        <div class="row">
          <h3 data-wow-delay="0.3s" class="wow fadeInLeft">Почему создания сайта нужно доручить нам?</h3>
          <p data-wow-delay="0.3s" class="wow fadeInRight">
            Создать сайт в наше время стает более проще, но это не означает, то что и качество у них будет соответсвтенное. А ведь качество, дизайн, оптимизированость, защита сайта и остальные детали занимает очень важное место, без чего вы можете потерятьосновную часть аудитории и даже не поняв в чем именно кроется ошибка! Так же распространенная ошибка брать готовые шаблоны сайтов. Такие шаблоны обречены на провал, так-как не дает уникальности среди остальных серых мас сайтов, и не будет давать вам желаемой прибыли. <br><br>
            Наша же команда предлагает вам создание уникального красивого сайта, что не только будет давать ценных посетителей, а также бедет создавать некий имидж, серьезность и качество вашего сайта.
          </p>
        </div>
        <div class="row">
          <h3 data-wow-delay="0.3s" class="wow fadeInLeft">Мы ведем поддержку сделаных нами сайтов</h3>
          <p data-wow-delay="0.3s" class="wow fadeInRight">
            Мы предлогаем поддержку вашего сайта на всем этапе его существования. При развитии сайта вам будет необходимо улучшать некие его части, что бы поддеривать тренд и делать перебывания пользователей на нем более комфортным.
          </p>
        </div>
        <div class="row">
          <h3 data-wow-delay="0.3s" class="wow fadeInLeft">От нас хостинг и домен</h3>
          <p data-wow-delay="0.3s" class="wow fadeInRight">
            Мы позаботимся о размещении вашего сайта на хостинг и покупки домена с именем котрый придумаете вы. Так же привязкой почты, для комфортного отправления писем прямо вам на почтовый адрес.
          </p>
        </div>
        <div class="row">
          <h3 data-wow-delay="0.3s" class="wow fadeInLeft">Что значит разработка сайта</h3>
          <p data-wow-delay="0.3s" class="wow fadeInRight">
            <b>Разработка сайта</b> - это реализвация вашего замысла в интернете, где ваши фантазии не ограничеваються ни чем. Будьто интернет магазин или ваш личный блог, а может даже ваш уникальный сервис.
          </p>
        </div>
        <div class="row">
          <h3 data-wow-delay="0.3s" class="wow fadeInLeft">Зачем мне делать сайты для вас?</h3>
          <p data-wow-delay="0.3s" class="wow fadeInRight">
            Может у вас есть <b>гениальная идея</b> для тематики сайта и вы бы хотели воплотить ее в жызнь, но по каким-то причинам не можете это сделать, мы готовы подать руку помощи и помочь вам в осуществлении вашей идеи.
          </p>
        </div>
      </div>
    </section>
    <!-- Form For Contact-->
    <section id="contact" class="contact bg-green-see">
      <div data-wow-delay="0.3s" class="container wow fadeInDown">
        <div class="row text-center">
          <div class="col-lg-12"><i class="fa fa-envelope-o fa-2x cl-white"></i>
            <h2 class="cl-white"> Контакты</h2><br>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-12">
            {{ Form::open(array( 'url' => '/mail', 'id' => 'form-contact' )) }}
              {{ Form::text('name', '', array('placeholder' => 'Имя*', 'id' => 'name', 'required' => 'required')) }}<br>
              {{ Form::email('email', '', array('placeholder' => 'Емейл*', 'id' => 'email', 'required' => 'required')) }}<br>
              {{ Form::input('tel', 'telephone', '', array('placeholder' => 'Телефон', 'id' => 'tel')) }}<br>
              {{ Form::textarea('message', '', array('placeholder' => 'Сообщение*', 'id' => 'message', 'required' => 'required')) }}<br>
              {{ Form::submit('Отправить', array('id' => 'button')) }}
            {{ Form::close() }}
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12">
            <p class="cl-green-see">2015 @ Artem Gavrylenko. All Rights Reserved</p>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-12"><a href="http://vk.com/forge0100" target="_blank"><i class="fa fa-vk fa-2x soc-icon"></i></a><a href="https://twitter.com/forge0100" target="_blank"><i class="fa fa-twitter fa-2x soc-icon"></i></a><a href="skype:kaunte2" target="_blank"><i class="fa fa-skype fa-2x soc-icon"></i></a><a href="https://github.com/Forge0100" target="_blank"><i class="fa fa-github-alt fa-2x soc-icon"></i></a></div>
        </div>
      </div>
    </footer>
@stop