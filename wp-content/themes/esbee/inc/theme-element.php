<?php
class ThemeElement
{
    public function sliderSection($sliderQuery)
    {
        $headerPart = '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">';
        $headerPart .= '<ol class="carousel-indicators">';

        if ($sliderQuery->have_posts()) {
            $cnt = 0;
            while ($sliderQuery->have_posts()) {
                $sliderQuery->the_post();
                $activeClass = ($cnt == 0) ? 'active' : '';
                $headerPart .= '<li data-target="#carouselExampleIndicators" data-slide-to="' . $cnt . '" class="' . $activeClass . '"></li>';
                $cnt++;
            }
        }
        $headerPart .= '</ol>';
        $headerPart .= '<div class="carousel-inner">';
        if ($sliderQuery->have_posts()) {
            $cnt = 0;
            while ($sliderQuery->have_posts()) {
                $sliderQuery->the_post();
                $activeClass = ($cnt == 0) ? 'active' : '';
                $headerPart .= '<div class="carousel-item ' . $activeClass . '">';
                $headerPart .= '<img class="d-block w-100" src="' . get_the_post_thumbnail_url() . '" alt="' . $cnt . ' slide">';
                $headerPart .= '<div class="carousel-caption d-none d-md-block">';
                $headerPart .= '<div class="container">';
                $headerPart .= '<h1>' . get_field('title') . '</h1>';
                $headerPart .= '<p class=" mb-3 ">' . get_field('description') . '</p>';
                $headerPart .= '<div class="get-button mb-5">';
                $headerPart .= '<a href="' . get_field('button_link') . '">' . get_field('button_text') . ' <i class="fa fa-arrow-circle-right icon"></i>';
                $headerPart .= '</a>';
                $headerPart .= '</div>';
                $headerPart .= '</div>';
                $headerPart .= '</div>';
                $headerPart .= '</div>';
                $cnt++;
            }
        }
        $headerPart .= '</div>';
        $headerPart .= '</div>';
        return $headerPart;
    }
    public static function aboutSection($aboutParams, $featureParams)
    {
        $aboutPart = '<section class="about-section">';
        $aboutPart .= '<div class="container">';
        $aboutPart .= '<div class="row mb-5">';
        $aboutPart .= '<div class="col-12 col-lg-6 col-md-6 ">';
        $aboutPart .= '<div class="img-fluid rounded mb-5">';
        $aboutPart .= '<img src="' . $aboutParams['image'] . '" class="about-img">';
        $aboutPart .= '</div>';
        $aboutPart .= '</div>';
        $aboutPart .= '<div class="col-lg-6 col-md-6 about">';
        $aboutPart .= '<h2>' . $aboutParams['heading'] . '</span>';
        $aboutPart .= '</h2>';
        $aboutPart .= '<p>' . $aboutParams['content'] . '</p>';
        $aboutPart .= '<div class="readmore-button">';
        $aboutPart .= '<a href="' . $aboutParams['button_link'] . '">' . $aboutParams['button_text'] . ' <i class="fa fa-arrow-circle-right icon pl-2 pt-2"></i>';
        $aboutPart .= '</a>';
        $aboutPart .= '</div>';
        $aboutPart .= '</div>';
        $aboutPart .= '</div>';
        $aboutPart .= '<div class="row">';
        $aboutPart .= '<div class="col-lg-6 col-md-6  about">';
        $aboutPart .= '<h3>' . $featureParams['heading'] . '</h3>';
        $aboutPart .= $featureParams['features'];
        $aboutPart .= '<div class="readmore-button mb-5">';
        $aboutPart .= '<a href="' . $featureParams['button_url'] . '">' . $featureParams['button_text'] . ' <i class="fa fa-arrow-circle-right icon pl-2 pt-2"></i>';
        $aboutPart .= '</a>';
        $aboutPart .= '</div>';
        $aboutPart .= '</div>';
        $aboutPart .= '<div class="col-lg-6 col-md-6 7">';
        $aboutPart .= '<div class="img-fluid rounded">';
        $aboutPart .= '<img src="' . $featureParams['image'] . '" class="about-img">';
        $aboutPart .= '</div>';
        $aboutPart .= '</div>';
        $aboutPart .= '</div>';
        $aboutPart .= '</div>';
        $aboutPart .= '</section>';
        return $aboutPart;
    }
    public static function serviceSection($serviceParams = null)
    {
        $servicePart = '<section class="services-section">';
        $servicePart .= '<div class="container text-center">';
        $servicePart .= '<h2>' . $serviceParams['heading'] . '</span>';
        $servicePart .= '</h2>';
        $servicePart .= '<p>' . $serviceParams['content'] . '</p>';
        $servicePart .= '<div class="services-block-section">';
        $servicePart .= '<div class="row">';
        foreach ($serviceParams['services'] as $service) {
            $servicePart .= '<div class="col-lg-4">';
            $servicePart .= '<div class="service-box text-center">';
            $servicePart .= '<img src="' . $service['image'] . '">';
            $servicePart .= '<h3>' . $service['title'] . '</h3>';
            $servicePart .= '<p>' . $service['content'] . '</p>';
            $servicePart .= '</div>';
            $servicePart .= '</div>';
        }
        $servicePart .= '</div>';
        $servicePart .= '</div>';
        $servicePart .= '</div>';
        $servicePart .= '</section>';
        return $servicePart;
    }
    public static function processSection($processParams)
    {
        $heading = $processParams['heading'];
        $processes = $processParams['process'];
        $processParams = '<section class="easyprocess-section">';
        $processParams .= '<div class="container text-center">';
        $processParams .= '<h2>' . $heading . '</span>';
        $processParams .= '</h2>';
        $processParams .= '<div class="process-block-section mt-5">';
        $processParams .= '<div class="row">';
        foreach ($processes as $process) {
            $processParams .= '<div class="col-lg-3">';
            $processParams .= '<div class="process-box text-center">';
            $processParams .= '<img src="' . $process['image'] . '">';
            $processParams .= '<h3>Consultation</h3>';
            $processParams .= '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>';
            $processParams .= '</div>';
            $processParams .= '</div>';
        }

        $processParams .= '</div>';
        $processParams .= '</div>';
        $processParams .= '</div>';
        $processParams .= '</section>';
        return $processParams;
    }
    public static function clientSection($clParam)
    {
        $clientParams = '<section class="client-section">';
        $clientParams .= '<div class="container text-center">';
        $clientParams .= '<h2>' . $clParam['heading'] . '</h2>';
        $clientParams .= '<p>' . $clParam['content'] . '</p>';
        $clientParams .= '<div class="process-block-section mt-5">';
        $clientParams .= '<div class="client">';
        $clientParams .= '<div class="owl-slider">';
        $clientParams .= '<div id="carousel" class="owl-carousel">';
        foreach ($clParam['reviews'] as $rev) {
            $clientParams .= '<div class="item client ">';
            $clientParams .= '<p>' . $rev['review'] . '</p>';
            $clientParams .= '<div class="team-profile">';
            $clientParams .= '<img src="' . $rev['image'] . '" class="img-fluid">';
            $clientParams .= '</div>';
            $clientParams .= '<h4>' . $rev['name'] . '</h4>';
            $clientParams .= '<h5>' . $rev['designation'] . '</h5>';
            $clientParams .= '</div>';
        }
        $clientParams .= '</div>';
        $clientParams .= '</div>';
        $clientParams .= '</div>';
        $clientParams .= '</div>';
        $clientParams .= '</div>';
        $clientParams .= '</section>';
        return $clientParams;
    }
    public static function directorSection($dirCont)
    {
        $directorParts = '<section class="director-section">';
        $directorParts .= '<div class="container">';
        $directorParts .= '<div class="row ">';
        $directorParts .= '<div class="col-12 col-lg-6 col-md-6 ">';
        $directorParts .= '<div class="img-fluid rounded mb-5">';
        $directorParts .= '<img src="' . $dirCont['image'] . '" class="about-img">';
        $directorParts .= '</div>';
        $directorParts .= '</div>';
        $directorParts .= '<div class="col-lg-6 col-md-6 about mt-3">';
        $directorParts .= '<h2>' . $dirCont['heading'] . '</span>';
        $directorParts .= '</h2>';
        $directorParts .= '<p>' . $dirCont['content'] . '</p>';
        $directorParts .= '<div class="name">-' . $dirCont['name'] . '</div>';
        $directorParts .= '</div>';
        $directorParts .= '</div>';
        $directorParts .= '</div>';
        $directorParts .= '</section>';
        return $directorParts;
    }
}

$thElementObj = new ThemeElement();
