<!DOCTYPE html>
<html dir="ltr" data-lt-installed="true" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Zotero') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />

        <link href="{{ asset('css/line-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.countdown.css') }}" rel="stylesheet">
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fancybox.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body class="">

   @include('partials.navigation')

   @include('partials.banner')

    <!--======================================
            START COURSE DETAIL
    ======================================-->
    <section class="course-detail">
        <div class="container">
            <div class="row course-item-wrap">
                <div class="col-lg-8">
                    <div class="course-item-content">

                        <div class="what-you-get">
                            <h3 class="what-you-get__title course-detail__title">Types de documents</h3>
                            @if(!$types->isEmpty())
                            <ul class="what-you-get__items">
                                @foreach($types as $type)
                                    <li class="what-you-get__item">
                                        <span class="la la-check-circle-o what-you-get__icon"></span>
                                        <span class="what-you-get__text">{{ $type->name }}</span>
                                    </li>
                                @endforeach
                            </ul>
                            @endif
                        </div><!-- end what-you-get -->

                    </div><!-- end course-item-content -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar-component">
                        <div class="sidebar">
                            <div class="sidebar-widget sidebar-preview">
                                <div class="sidebar-preview-titles">
                                    <h3 class="widget__title">Liens utiles</h3>
                                    <span class="section__divider"></span>
                                </div>
                                <div class="preview-video-and-details">
                                    <div class="preview-course-content">
                                        <div class="buy-course-btn">
                                            <button class="theme-btn" type="button">{{ $links->firstWhere('main', 1)->title }}</button>
                                        </div>
                                        <div class="preview-course-incentives">
                                            <p class="preview-course-incentives__title">Documentation</p>
                                            @if(!$links->isEmpty())
                                                <ul class="preview-course-incentives__list">
                                                    @foreach($links->where('main',null) as $link)
                                                        <li><a target="_blank" href="{{ $link->url }}"><span class="fas fa-link"></span>{{ $link->title }}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div><!-- end preview-course-incentives -->
                                    </div><!-- end preview-course-content -->
                                </div><!-- end preview-video-and-details -->
                            </div><!-- end sidebar-widget -->

                        </div><!-- end sidebar -->
                    </div><!-- end sidebar-component -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end course-detail -->

   <section class="course-detail">
       <div class="container">
           <div class="row course-item-wrap">
               <div class="col-lg-12">

                   <div class="curriculum-wrap">
                       <div class="curriculum-header d-flex align-items-center">
                           <div class="curriculum-header-left">
                               <h3 class="requirements__title course-detail__title">Correspondance des champs dans documents</h3>
                           </div>
                       </div><!-- end curriculum-header -->
                       <div class="curriculum-content">

                           <div class="accordion course-accordion" id="accordionMain">
                               @if(!$types->isEmpty())
                                   @foreach($types as $type)
                                       <div class="card">
                                           <div class="card-header {{ $type->rank > 0 ? 'card-exemple' : '' }}" id="heading_{{ $type->id }}">
                                               <h2 class="mb-0">
                                                   <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse_{{ $type->id }}">
                                                       <i class="la la-angle-up"></i><i class="la la-angle-down"></i>{{ $type->name }}
                                                   </button>
                                                   @if(\File::exists(public_path('images/'.$type->id.'.png')))
                                                      <a data-fancybox="exemple_{{ $type->id }}" data-src="#exemple_{{ $type->id }}"
                                                                                href="javascript:;" class="exemple-btn">Exemple</a>
                                                       <div id="exemple_{{ $type->id }}" style="display: none;width:95%;">
                                                           <img src="{{ asset('images/'.$type->id .'.png') }}">
                                                       </div>
                                                   @endif
                                               </h2>
                                           </div><!-- end card-header -->
                                           <div id="collapse_{{ $type->id }}" class="collapse" aria-labelledby="heading_{{ $type->id }}" data-parent="#accordionMain">
                                               <div class="card-body p-4">

                                                {{--   @if(\File::exists(public_path('images/'.$type->id.'.png')))
                                                       <p class="text-right"><a data-fancybox="exemple_{{ $type->id }}" data-src="#exemple_{{ $type->id }}"
                                                             href="javascript:;" class="theme-btn">Exemple</a></p>
                                                       <div id="exemple_{{ $type->id }}" style="display: none;width:95%;">
                                                           <img src="{{ asset('images/'.$type->id .'.png') }}">
                                                       </div>
                                                   @endif--}}

                                                   <div class="row">
                                                       <div class="col">
                                                           <?php $mappings_bilblio = $bibliographie->get($type->id); ?>
                                                           @include('partials.mapping', ['mappings' => $mappings_bilblio, 'title' => 'Bibliographie'])
                                                       </div>
                                                       <?php $mappings_citation = $citations->get($type->id); ?>
                                                       <div class="col">
                                                           <?php $mappings_citation = $citations->get($type->id); ?>
                                                           @include('partials.mapping', ['mappings' => $mappings_citation, 'title' => 'Citation'])
                                                       </div>
                                                   </div>

                                               </div><!-- end card-body -->
                                           </div><!-- end collapse -->
                                       </div><!-- end card -->
                                   @endforeach
                               @endif
                           </div><!-- end accordion -->

                       </div><!-- end curriculum-content -->
                   </div><!-- end curriculum-wrap -->

                   <div class="requirement-wrap audience-wrap">
                       <h3 class="requirements__title course-detail__title">Type de documents non utiliés mais disponibles</h3>
                       @if(!$nonused->isEmpty())
                           <?php $chunks = $nonused->chunk(4); ?>
                           <div class="row">
                               @foreach($chunks as $chunk)
                                   <ul class="requirements__list col">
                                       @foreach($chunk as $type)
                                           <li class="requirements__item">
                                               <span class="la la-angle-right requirements__icon"></span>
                                               {{ $type->name }}
                                           </li>
                                       @endforeach
                                   </ul>
                               @endforeach
                           </div>
                       @endif
                   </div>


                 <div class="description-wrap">
                     <h3 class="description__title course-detail__title">Configurations</h3>
                     <div class="description__text">

                         Si plusieurs auteurs limiter
                         Attributs “et-al-min” et “et-al-use-first”

                         Délimiteurs "et" ou "&"
                         Par exemple pour utiliser le symbole “&” à la place de “et”
                         <pre><xmp><name form="short" and="" delimiter=", " initialize-with=". "/></xmp></pre>

                         Configurer les nom/prénom pour avoir prénom complet plutôt que l'initale, que le nom de famille ou autre formats
                         <ul>
                             <li> disambiguate-add-names="true"</li>
                             <li>disambiguate-add-givenname="true"</li>
                             <li>givenname-disambiguation-rule="primary-name"</li>
                         </ul>


                     </div>
                     <p>2 Blocs de style pour la blibliographie et les citations en bas de page:</p>
<xmp style="font-weight: bold;">
<citation>
    <if type="article-journal" match="any">
        <choose>
            <if match="any" variable="author">
                <text macro="author" />
            </if>
        </choose>
    </if>
    ...
</citation>

<bibliography>
    <if type="article-journal" match="any">
        <choose>
            <if match="any" variable="title">
                <text variable="title" text-case="capitalize-first" />
            </if>
        </choose>
    </if>
    ...
</bibliography>
</xmp>
                 </div> <!-- end description-wrap -->

               </div><!-- end col-lg-12 -->
           </div><!-- end row -->
       </div><!-- end container -->
   </section><!-- end course-detail -->
    <!--======================================
            END COURSE DETAIL
    ======================================-->

    @include('partials.footer')

    <!-- start scroll top -->
    <div id="scroll-top">
        <i class="fa fa-angle-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/isotope.js') }}"></script>
        <script src="{{ asset('js/waypoint.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/particles.min.js') }}"></script>
        <script src="{{ asset('js/particlesRun.js') }}"></script>
        <script src="{{ asset('js/fancybox.js') }}"></script>
        <script src="{{ asset('js/wow.js') }}"></script>
        <script src="{{ asset('js/smooth-scrolling.js') }}"></script>
    </body>
</html>
