
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Terraversity</title>

    {!! HTML::style('/assets/css/custom.css') !!}
    {!! HTML::style('/assets/css/drop.css') !!}
    {!! HTML::style('/assets/css/konten.css') !!}
    {!! HTML::style('/assets/css/simple-sidebar.css') !!}
    {!! HTML::style('/assets/css/navbar-static-top.css') !!}
    {!! HTML::style('/assets/css/font-awesome.min.css') !!}
    {!! HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') !!}
    {!! HTML::style('/assets/plugins/bootstrap/css/bootstrap.min.css') !!}


    @yield('head')

</head>

<body>


<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('public.home')  }}">
              <span class="terra">
                <img src="/assets/images/logo.png" alt="Terraversity" style="width: 100px; height: 30px" />
              </span>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            @if(!Auth::check())
              <li><a   href="{{ route('public.home')  }}" >Home</a></li>
              <li class="dropdown mega-dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown"  >SBMPTN <span class="caret"></span></a>
                    <ul class="dropdown-menu mega-dropdown-menu">

                      <div class="megamenunav">

                                  <li class="col-md-offset-2 col-sm-3 col-md-2">
                                     <ul class="cus-menu">
                                      <li class="cus-sub-menu">
                                      <a class="line-mtk-dasar" href="" id="matematikaDasar" > Matematika Dasar</a>
                                        <i class="fa fa-angle-right"></i>
                                      </li>
                                      <li class="cus-sub-menu"><a class="line-mtk-ipa" href="" id="matematikaIpa"> Matematika IPA</a>
                                        <i class="fa fa-angle-right"></i>
                                      </li>
                                      <li class="cus-sub-menu"><a class="line-fisika" href="" id="fisika">Fisika</a>
                                        <i class="fa fa-angle-right"></i>
                                      </li>
                                      <li class="cus-sub-menu"><a class="line-kimia" href="" id="kimia">Kimia</a>
                                        <i class="fa fa-angle-right"></i>
                                      </li>
                                      <li class="cus-sub-menu"><a class="line-biologi" href="" id="biologi">Biologi</a>
                                        <i class="fa fa-angle-right"></i>
                                      </li>
                                      <li class="cus-sub-menu"><a class="line-inggris" href="" id="inggris">Bahasa Inggris</a>
                                        <i class="fa fa-angle-right"></i>
                                      </li>
                                      <li class="cus-sub-menu"><a class="line-indo" href="" id="indo">Bahasa Indonesia</a>
                                        <i class="fa fa-angle-right"></i>
                                      </li>
                                      <li class="cus-sub-menu"><a class="line-tpa" href="" id="tpa">TPA</a>
                                        <i class="fa fa-angle-right"></i>
                                      </li>
                                      <li class="divider"></li>
                                      </ul>
                                  </li>

                                    <div class="menu-block-right bg-menu-right tahunmatematikaDasar ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunmatematikaDasar" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>


                                                <li><a href="{{ route('public.matdas09') }}">2009</a></li>
                                                <li><a href="{{ route('public.matdas10') }}">2010</a></li>
                                                <li><a href="{{ route('public.matdas11') }}">2011</a></li>
                                                <li><a href="{{ route('public.matdas12') }}">2012</a></li>
                                                <li><a href="{{ route('public.matdas13') }}">2013</a></li>
                                                <li><a href="{{ route('public.matdas14') }}">2014</a></li>
                                                <li><a href="{{ route('public.matdas15') }}">2015</a></li>

                                              </ul>

                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunmatematikaDasar" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="#">Eksponen dan Logaritma</a></li>
                                              <li><a href="#">Persamaan Kuadrat</a></li>
                                              <li><a href="#">Fungsi Kuadrat</a></li>
                                              <li><a href="#">Pertidaksamaan</a></li>
                                              <li><a href="#">SPL dan Program Linear</a></li>
                                              <li><a href="#">Logika</a></li>
                                              <li><a href="#">Fungsi</a></li>
                                              <li><a href="#">Turunan</a></li>
                                              <li><a href="#">Persamaan Garis</a></li>
                                              <li><a href="#">Trigonometri</a></li>
                                              <li><a href="#">Peluang</a></li>
                                              <li><a href="#">Bidang Datar</a></li>
                                              <li><a href="#">Matriks</a></li>
                                              <li><a href="#">Barisan dan Deret</a></li>
                                              <li><a href="#">Dimensi tiga</a></li>
                                              <li><a href="#">Statistika</a></li>
                                              <li><a href="#">Materi Dasar</a></li>
                                            </ul>

                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunmatematikaDasar"></div>

                                    <div class="menu-block-right bg-menu-right tahunmatematikaIpa ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">

                                              <ul class="tahunmatematikaIpa" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>

                                                <li><a href="#">MATIPA 2009 378</a></li>
                                                <li><a href="#">MATIPA 2010 526</a></li>
                                                <li><a href="#">MATIPA 2011 523</a></li>
                                                <li><a href="#">MATIPA 2012 132</a></li>
                                                <li><a href="#">MATIPA 2012 633</a></li>
                                                <li><a href="#">MATIPA 2013 131</a></li>
                                                <li><a href="#">MATIPA 2013 134</a></li>
                                                <li><a href="#">MATIPA 2014 512</a></li>
                                                <li><a href="#">MATIPA 2014 523</a></li>
                                                <li><a href="#">MATIPA 2015 519</a></li>
                                                <li><a href="#">MATIPA 2015 538</a></li>

                                              </ul>

                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunmatematikaIpa" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="#">Pertidaksamaan</a></li>
                                              <li><a href="#">Vektor</a></li>
                                              <li><a href="#">Dimensi Tiga</a></li>
                                              <li><a href="#">Integral</a></li>
                                              <li><a href="#">Barisan dan Deret</a></li>
                                              <li><a href="#">Turunan</a></li>
                                              <li><a href="#">Fungsi</a></li>
                                              <li><a href="#">Bangun Datar</a></li>
                                              <li><a href="#">Trigonometri</a></li>
                                              <li><a href="#">Suku Banyak</a></li>
                                              <li><a href="#">Matematika IPA</a></li>
                                              <li><a href="#">Limit</a></li>
                                              <li><a href="#">Lingkaran</a></li>
                                              <li><a href="#">Peluang</a></li>
                                              <li><a href="#">Transformasi</a></li>
                                              <li><a href="#">Persamaan Kuadrat</a></li>
                                              <li><a href="#">Fungsi Kuadrat</a></li>
                                              <li><a href="#">Eksponen dan Logaritma</a></li>
                                              <li><a href="#">Matriks</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunmatematikaIpa"></div>

                                    <div class="menu-block-right bg-menu-right tahunfisika ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunfisika" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <li><a href="#">tahun 2005</a></li>
                                                <li><a href="#">tahun 2006</a></li>
                                                <li><a href="#">tahun 2007</a></li>
                                                <li><a href="#">tahun 2008</a></li>
                                                <li><a href="#">tahun 2009</a></li>
                                                <li><a href="#">tahun 2010</a></li>
                                                <li><a href="#">tahun 2011</a></li>
                                                <li><a href="#">tahun 2012</a></li>
                                                <li><a href="#">tahun 2013</a></li>
                                                <li><a href="#">tahun 2014</a></li>
                                                <li><a href="#">tahun 2015</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunfisika" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="{{ route('public.fisikapendahuluan') }}">Pendahuluan</a></li>
                                              <li><a href="#">Dinamika Gerak Lurus</a></li>
                                              <li><a href="#">Dinamika Rotasi</a></li>
                                              <li><a href="#">Fisika Modern</a></li>
                                              <li><a href="#">Fluida</a></li>
                                              <li><a href="#">Getaran,Gelombang dan Bunyi</a></li>
                                              <li><a href="#">Induksi Magnetik Dan Arus Tegangan Bolak-Balik</a></li>
                                              <li><a href="#">Kinematika Gerak Lurus</a></li>
                                              <li><a href="#">Listrik</a></li>
                                              <li><a href="#">Momentum Dan Impuls</a></li>
                                              <li><a href="#">Optik</a></li>
                                              <li><a href="#">Suhu Dan Kalor</a></li>
                                              <li><a href="#">Usaha Dan Energi</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunfisika"></div>

                                    <div class="menu-block-right bg-menu-right tahunkimia ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunkimia scroll-menu" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <li><a href="#">tahun 2005</a></li>
                                                <li><a href="#">tahun 2006</a></li>
                                                <li><a href="#">tahun 2007</a></li>
                                                <li><a href="#">tahun 2008</a></li>
                                                <li><a href="#">tahun 2009</a></li>
                                                <li><a href="#">tahun 2010</a></li>
                                                <li><a href="#">tahun 2011</a></li>
                                                <li><a href="#">tahun 2012</a></li>
                                                <li><a href="#">tahun 2013</a></li>
                                                <li><a href="#">tahun 2014</a></li>
                                                <li><a href="#">tahun 2015</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunkimia" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="#">Bab 1</a></li>

                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunkimia"></div>

                                    <div class="menu-block-right bg-menu-right tahunbiologi ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunbiologi" >
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>

                                                <li><a href="#">BIOLOGI SBM 2005 480</a></li>
                                                <li><a href="#">BIOLOGI SBM 2006 420</a></li>
                                                <li><a href="#">BIOLOGI SBM 2007 350</a></li>
                                                <li><a href="#">BIOLOGI SBM 2008 102</a></li>
                                                <li><a href="#">BIOLOGI SBM 2009 378</a></li>
                                                <li><a href="#">BIOLOGI SBM 2010 350</a></li>
                                                <li><a href="#">BIOLOGI SBM 2013 131</a></li>


                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunbiologi" >
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="#">Sel</a></li>
                                              <li><a href="#">Struktur Tumbuhan</a></li>
                                              <li><a href="#">Reproduksi Sel</a></li>
                                              <li><a href="#">Struktur serta Fungsi Tubuh Hewan dan Manusia</a></li>
                                              <li><a href="#">Genetika dan Evolusi</a></li>
                                              <li><a href="#">Biologi dan Lingkungan</a></li>
                                              <li><a href="#">Metabolisme</a></li>
                                              <li><a href="#">Bioteknologi</a></li>
                                              <li><a href="#">Invertebrata</a></li>
                                              <li><a href="#">Klasifikasi Mahluk Hidup</a></li>


                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunbiologi"></div>

                                    <div class="menu-block-right bg-menu-right tahuninggris ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahuninggris scroll-menu">
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <li><a href="#">tahun 2005</a></li>
                                                <li><a href="#">tahun 2006</a></li>
                                                <li><a href="#">tahun 2007</a></li>
                                                <li><a href="#">tahun 2008</a></li>
                                                <li><a href="#">tahun 2009</a></li>
                                                <li><a href="#">tahun 2010</a></li>
                                                <li><a href="#">tahun 2011</a></li>
                                                <li><a href="#">tahun 2012</a></li>
                                                <li><a href="#">tahun 2013</a></li>
                                                <li><a href="#">tahun 2014</a></li>
                                                <li><a href="#">tahun 2015</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahuninggris">
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="#">Bab 1</a></li>
                                              <li><a href="#">Bab 2</a></li>
                                              <li><a href="#">Bab 3</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahuninggris"></div>

                                    <div class="menu-block-right bg-menu-right tahunindo ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahunindo">
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <li><a href="#">tahun 2005</a></li>
                                                <li><a href="#">tahun 2006</a></li>
                                                <li><a href="#">tahun 2007</a></li>
                                                <li><a href="#">tahun 2008</a></li>
                                                <li><a href="#">tahun 2009</a></li>
                                                <li><a href="#">tahun 2010</a></li>
                                                <li><a href="#">tahun 2011</a></li>
                                                <li><a href="#">tahun 2012</a></li>
                                                <li><a href="#">tahun 2013</a></li>
                                                <li><a href="#">tahun 2014</a></li>
                                                <li><a href="#">tahun 2015</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahunindo">
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="#">Bab 1</a></li>
                                              <li><a href="#">Bab 2</a></li>
                                              <li><a href="#">Bab 3</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahunindo"></div>

                                    <div class="menu-block-right bg-menu-right tahuntpa ">
                                      <div class="row scroll-menu">
                                          <div class="col-md-6 scroll-menu">
                                              <ul class="tahuntpa">
                                                <li >Berdasarkan Tahun</li>
                                                <li class="divider"></li>
                                                <li><a href="#">tahun 2005</a></li>
                                                <li><a href="#">tahun 2006</a></li>
                                                <li><a href="#">tahun 2007</a></li>
                                                <li><a href="#">tahun 2008</a></li>
                                                <li><a href="#">tahun 2009</a></li>
                                                <li><a href="#">tahun 2010</a></li>
                                                <li><a href="#">tahun 2011</a></li>
                                                <li><a href="#">tahun 2012</a></li>
                                                <li><a href="#">tahun 2013</a></li>
                                                <li><a href="#">tahun 2014</a></li>
                                                <li><a href="#">tahun 2015</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-md-6 scroll-menu">
                                            <ul class="tahuntpa">
                                              <li >Berdasarkan Bab</li>
                                              <li class="divider"></li>
                                              <li><a href="#">Bab 1</a></li>
                                              <li><a href="#">Bab 2</a></li>
                                              <li><a href="#">Bab 3</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="bg-block-menu-right tahuntpa"></div>
                      </div>
                    </ul>
              </li>
@elseif(Auth::user()->email == 'eduterrajogja@terraversity.com')
                <li><a href="{{ route('public.home')  }}"  >Home</a></li>
                <li><a href="/admin/home"  >Admin Area</a></li>
@else
<li><a   href="{{ route('public.home')  }}" >Home</a></li>
<li class="dropdown mega-dropdown">
    <a href="" class="dropdown-toggle" data-toggle="dropdown"  >SBMPTN <span class="caret"></span></a>
      <ul class="dropdown-menu mega-dropdown-menu">

        <div class="megamenunav">

                    <li class="col-md-offset-2 col-sm-3 col-md-2">
                       <ul class="cus-menu">
                        <li class="cus-sub-menu">
                        <a class="line-mtk-dasar" href="" id="matematikaDasar" > Matematika Dasar</a>
                          <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="cus-sub-menu"><a class="line-mtk-ipa" href="" id="matematikaIpa"> Matematika IPA</a>
                          <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="cus-sub-menu"><a class="line-fisika" href="" id="fisika">Fisika</a>
                          <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="cus-sub-menu"><a class="line-kimia" href="" id="kimia">Kimia</a>
                          <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="cus-sub-menu"><a class="line-biologi" href="" id="biologi">Biologi</a>
                          <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="cus-sub-menu"><a class="line-inggris" href="" id="inggris">Bahasa Inggris</a>
                          <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="cus-sub-menu"><a class="line-indo" href="" id="indo">Bahasa Indonesia</a>
                          <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="cus-sub-menu"><a class="line-tpa" href="" id="tpa">TPA</a>
                          <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="divider"></li>
                        </ul>
                    </li>

                      <div class="menu-block-right bg-menu-right tahunmatematikaDasar ">
                        <div class="row scroll-menu">
                            <div class="col-md-6 scroll-menu">
                                <ul class="tahunmatematikaDasar" >
                                  <li >Berdasarkan Tahun</li>
                                  <li class="divider"></li>


                                  <li><a href="{{ route('public.matdas09') }}">2009</a></li>
                                  <li><a href="{{ route('public.matdas10') }}">2010</a></li>
                                  <li><a href="{{ route('public.matdas11') }}">2011</a></li>
                                  <li><a href="{{ route('public.matdas12') }}">2012</a></li>
                                  <li><a href="{{ route('public.matdas13') }}">2013</a></li>
                                  <li><a href="{{ route('public.matdas14') }}">2014</a></li>
                                  <li><a href="{{ route('public.matdas15') }}">2015</a></li>

                                </ul>

                            </div>
                            <div class="col-md-6 scroll-menu">
                              <ul class="tahunmatematikaDasar" >
                                <li >Berdasarkan Bab</li>
                                <li class="divider"></li>
                                <li><a href="#">Eksponen dan Logaritma</a></li>
                                <li><a href="#">Persamaan Kuadrat</a></li>
                                <li><a href="#">Fungsi Kuadrat</a></li>
                                <li><a href="#">Pertidaksamaan</a></li>
                                <li><a href="#">SPL dan Program Linear</a></li>
                                <li><a href="#">Logika</a></li>
                                <li><a href="#">Fungsi</a></li>
                                <li><a href="#">Turunan</a></li>
                                <li><a href="#">Persamaan Garis</a></li>
                                <li><a href="#">Trigonometri</a></li>
                                <li><a href="#">Peluang</a></li>
                                <li><a href="#">Bidang Datar</a></li>
                                <li><a href="#">Matriks</a></li>
                                <li><a href="#">Barisan dan Deret</a></li>
                                <li><a href="#">Dimensi tiga</a></li>
                                <li><a href="#">Statistika</a></li>
                                <li><a href="#">Materi Dasar</a></li>
                              </ul>

                            </div>
                        </div>
                      </div>
                      <div class="bg-block-menu-right tahunmatematikaDasar"></div>

                      <div class="menu-block-right bg-menu-right tahunmatematikaIpa ">
                        <div class="row scroll-menu">
                            <div class="col-md-6 scroll-menu">

                                <ul class="tahunmatematikaIpa" >
                                  <li >Berdasarkan Tahun</li>
                                  <li class="divider"></li>

                                  <li><a href="#">tahun 2009</a></li>
                                  <li><a href="#">tahun 2010</a></li>
                                  <li><a href="#">tahun 2011</a></li>
                                  <li><a href="#">tahun 2012</a></li>
                                  <li><a href="#">tahun 2012</a></li>
                                  <li><a href="#">tahun 2013</a></li>
                                  <li><a href="#">tahun 2013</a></li>
                                  <li><a href="#">tahun 2014</a></li>
                                  <li><a href="#">tahun 2014</a></li>
                                  <li><a href="#">tahun 2015</a></li>
                                  <li><a href="#">tahun 2015</a></li>
                                </ul>

                            </div>
                            <div class="col-md-6 scroll-menu">
                              <ul class="tahunmatematikaIpa" >
                                <li >Berdasarkan Bab</li>
                                <li class="divider"></li>
                                <li><a href="#">Pertidaksamaan</a></li>
                                <li><a href="#">Vektor</a></li>
                                <li><a href="#">Dimensi Tiga</a></li>
                                <li><a href="#">Integral</a></li>
                                <li><a href="#">Barisan dan Deret</a></li>
                                <li><a href="#">Turunan</a></li>
                                <li><a href="#">Fungsi</a></li>
                                <li><a href="#">Bangun Datar</a></li>
                                <li><a href="#">Trigonometri</a></li>
                                <li><a href="#">Suku Banyak</a></li>
                                <li><a href="#">Matematika IPA</a></li>
                                <li><a href="#">Limit</a></li>
                                <li><a href="#">Lingkaran</a></li>
                                <li><a href="#">Peluang</a></li>
                                <li><a href="#">Transformasi</a></li>
                                <li><a href="#">Persamaan Kuadrat</a></li>
                                <li><a href="#">Fungsi Kuadrat</a></li>
                                <li><a href="#">Eksponen dan Logaritma</a></li>
                                <li><a href="#">Matriks</a></li>
                              </ul>
                            </div>
                        </div>
                      </div>
                      <div class="bg-block-menu-right tahunmatematikaIpa"></div>

                      <div class="menu-block-right bg-menu-right tahunfisika ">
                        <div class="row scroll-menu">
                            <div class="col-md-6 scroll-menu">
                                <ul class="tahunfisika" >
                                  <li >Berdasarkan Tahun</li>
                                  <li class="divider"></li>
                                  <li><a href="#">tahun 2005</a></li>
                                  <li><a href="#">tahun 2006</a></li>
                                  <li><a href="#">tahun 2007</a></li>
                                  <li><a href="#">tahun 2008</a></li>
                                  <li><a href="#">tahun 2009</a></li>
                                  <li><a href="#">tahun 2010</a></li>
                                  <li><a href="#">tahun 2011</a></li>
                                  <li><a href="#">tahun 2012</a></li>
                                  <li><a href="#">tahun 2013</a></li>
                                  <li><a href="#">tahun 2014</a></li>
                                  <li><a href="#">tahun 2015</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 scroll-menu">
                              <ul class="tahunfisika" >
                                <li >Berdasarkan Bab</li>
                                <li class="divider"></li>
                                <li><a href="#">Pendahuluan</a></li>
                                <li><a href="#">Dinamika Gerak Lurus</a></li>
                                <li><a href="#">Dinamika Rotasi</a></li>
                                <li><a href="#">Fisika Modern</a></li>
                                <li><a href="#">Fluida</a></li>
                                <li><a href="#">Getaran,Gelombang dan Bunyi</a></li>
                                <li><a href="#">Induksi Magnetik Dan Arus Tegangan Bolak-Balik</a></li>
                                <li><a href="#">Kinematika Gerak Lurus</a></li>
                                <li><a href="#">Listrik</a></li>
                                <li><a href="#">Momentum Dan Impuls</a></li>
                                <li><a href="#">Optik</a></li>
                                <li><a href="#">Suhu Dan Kalor</a></li>
                                <li><a href="#">Usaha Dan Energi</a></li>
                              </ul>
                            </div>
                        </div>
                      </div>
                      <div class="bg-block-menu-right tahunfisika"></div>

                      <div class="menu-block-right bg-menu-right tahunkimia ">
                        <div class="row scroll-menu">
                            <div class="col-md-6 scroll-menu">
                                <ul class="tahunkimia scroll-menu" >
                                  <li >Berdasarkan Tahun</li>
                                  <li class="divider"></li>
                                  <li><a href="#">tahun 2005</a></li>
                                  <li><a href="#">tahun 2006</a></li>
                                  <li><a href="#">tahun 2007</a></li>
                                  <li><a href="#">tahun 2008</a></li>
                                  <li><a href="#">tahun 2009</a></li>
                                  <li><a href="#">tahun 2010</a></li>
                                  <li><a href="#">tahun 2011</a></li>
                                  <li><a href="#">tahun 2012</a></li>
                                  <li><a href="#">tahun 2013</a></li>
                                  <li><a href="#">tahun 2014</a></li>
                                  <li><a href="#">tahun 2015</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 scroll-menu">
                              <ul class="tahunkimia" >
                                <li >Berdasarkan Bab</li>
                                <li class="divider"></li>
                                <li><a href="#">Bab 1</a></li>

                              </ul>
                            </div>
                        </div>
                      </div>
                      <div class="bg-block-menu-right tahunkimia"></div>

                      <div class="menu-block-right bg-menu-right tahunbiologi ">
                        <div class="row scroll-menu">
                            <div class="col-md-6 scroll-menu">
                                <ul class="tahunbiologi" >
                                  <li >Berdasarkan Tahun</li>
                                  <li class="divider"></li>

                                  <li><a href="#">tahun 2005</a></li>
                                  <li><a href="#">tahun 2006</a></li>
                                  <li><a href="#">tahun 2007</a></li>
                                  <li><a href="#">tahun 2008</a></li>
                                  <li><a href="#">tahun 2009</a></li>
                                  <li><a href="#">tahun 2010</a></li>
                                  <li><a href="#">tahun 2013</a></li>


                                </ul>
                            </div>
                            <div class="col-md-6 scroll-menu">
                              <ul class="tahunbiologi" >
                                <li >Berdasarkan Bab</li>
                                <li class="divider"></li>
                                <li><a href="#">Sel</a></li>
                                <li><a href="#">Struktur Tumbuhan</a></li>
                                <li><a href="#">Reproduksi Sel</a></li>
                                <li><a href="#">Struktur serta Fungsi Tubuh Hewan dan Manusia</a></li>
                                <li><a href="#">Genetika dan Evolusi</a></li>
                                <li><a href="#">Biologi dan Lingkungan</a></li>
                                <li><a href="#">Metabolisme</a></li>
                                <li><a href="#">Bioteknologi</a></li>
                                <li><a href="#">Invertebrata</a></li>
                                <li><a href="#">Klasifikasi Mahluk Hidup</a></li>


                              </ul>
                            </div>
                        </div>
                      </div>
                      <div class="bg-block-menu-right tahunbiologi"></div>

                      <div class="menu-block-right bg-menu-right tahuninggris ">
                        <div class="row scroll-menu">
                            <div class="col-md-6 scroll-menu">
                                <ul class="tahuninggris scroll-menu">
                                  <li >Berdasarkan Tahun</li>
                                  <li class="divider"></li>
                                  <li><a href="#">tahun 2005</a></li>
                                  <li><a href="#">tahun 2006</a></li>
                                  <li><a href="#">tahun 2007</a></li>
                                  <li><a href="#">tahun 2008</a></li>
                                  <li><a href="#">tahun 2009</a></li>
                                  <li><a href="#">tahun 2010</a></li>
                                  <li><a href="#">tahun 2011</a></li>
                                  <li><a href="#">tahun 2012</a></li>
                                  <li><a href="#">tahun 2013</a></li>
                                  <li><a href="#">tahun 2014</a></li>
                                  <li><a href="#">tahun 2015</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 scroll-menu">
                              <ul class="tahuninggris">
                                <li >Berdasarkan Bab</li>
                                <li class="divider"></li>
                                <li><a href="#">Bab 1</a></li>
                                <li><a href="#">Bab 2</a></li>
                                <li><a href="#">Bab 3</a></li>
                              </ul>
                            </div>
                        </div>
                      </div>
                      <div class="bg-block-menu-right tahuninggris"></div>

                      <div class="menu-block-right bg-menu-right tahunindo ">
                        <div class="row scroll-menu">
                            <div class="col-md-6 scroll-menu">
                                <ul class="tahunindo">
                                  <li >Berdasarkan Tahun</li>
                                  <li class="divider"></li>
                                  <li><a href="#">tahun 2005</a></li>
                                  <li><a href="#">tahun 2006</a></li>
                                  <li><a href="#">tahun 2007</a></li>
                                  <li><a href="#">tahun 2008</a></li>
                                  <li><a href="#">tahun 2009</a></li>
                                  <li><a href="#">tahun 2010</a></li>
                                  <li><a href="#">tahun 2011</a></li>
                                  <li><a href="#">tahun 2012</a></li>
                                  <li><a href="#">tahun 2013</a></li>
                                  <li><a href="#">tahun 2014</a></li>
                                  <li><a href="#">tahun 2015</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 scroll-menu">
                              <ul class="tahunindo">
                                <li >Berdasarkan Bab</li>
                                <li class="divider"></li>
                                <li><a href="#">Bab 1</a></li>
                                <li><a href="#">Bab 2</a></li>
                                <li><a href="#">Bab 3</a></li>
                              </ul>
                            </div>
                        </div>
                      </div>
                      <div class="bg-block-menu-right tahunindo"></div>

                      <div class="menu-block-right bg-menu-right tahuntpa ">
                        <div class="row scroll-menu">
                            <div class="col-md-6 scroll-menu">
                                <ul class="tahuntpa">
                                  <li >Berdasarkan Tahun</li>
                                  <li class="divider"></li>
                                  <li><a href="#">tahun 2005</a></li>
                                  <li><a href="#">tahun 2006</a></li>
                                  <li><a href="#">tahun 2007</a></li>
                                  <li><a href="#">tahun 2008</a></li>
                                  <li><a href="#">tahun 2009</a></li>
                                  <li><a href="#">tahun 2010</a></li>
                                  <li><a href="#">tahun 2011</a></li>
                                  <li><a href="#">tahun 2012</a></li>
                                  <li><a href="#">tahun 2013</a></li>
                                  <li><a href="#">tahun 2014</a></li>
                                  <li><a href="#">tahun 2015</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 scroll-menu">
                              <ul class="tahuntpa">
                                <li >Berdasarkan Bab</li>
                                <li class="divider"></li>
                                <li><a href="#">Bab 1</a></li>
                                <li><a href="#">Bab 2</a></li>
                                <li><a href="#">Bab 3</a></li>
                              </ul>
                            </div>
                        </div>
                      </div>
                      <div class="bg-block-menu-right tahuntpa"></div>
        </div>
      </ul>
</li>
@endif
</ul>


            <ul class="nav navbar-nav navbar-right">
@if(!Auth::check())
                  <li><a href="{{ route('public.voucher') }}"  >Voucher &nbsp;<span class="label label-warning" style="font-size: 9px">Promo</span></a></li>
                  <li><a   href="{{ route('auth.login') }}">Masuk</a></li>
                  <li><a   href="{{ route('auth.register') }}">Daftar</a></li>
@else
                  <li><a   href="/user/voucher">Voucher</a></li>
                  <li><img src="{{Auth::user()->profile_picture}}" class="tetap"></li>
                  <li><a   href="#">{{ Auth::user()->first_name }}</a></li>
                  <li><a   href="{{ route('authenticated.logout') }}">Logout</a></li>
@endif
            </ul>
        </div>
    </div>
</nav>

<div class="pluz">

    @yield('content')

</div>



{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js') !!}
{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js') !!}
{!! HTML::script('/assets/plugins/bootstrap/js/bootstrap.min.js') !!}
{!! HTML::script('/assets/js/sidebar_menu.js') !!}
{!! HTML::script('/assets/js/skrip.js') !!}
{!! HTML::script('/assets/js/drop.js') !!}

{!! HTML::script('/assets/js/ie10-viewport-bug-workaround.js') !!}

@yield('footer')

</body>
</html>
