<style>
    .gallery-title
    {
        font-size: 36px;
        color: #42B32F;
        text-align: center;
        font-weight: 500;
        margin-bottom: 70px;
    }
    .gallery-title:after {
        content: "";
        position: absolute;
        width: 7.5%;
        left: 46.5%;
        height: 45px;
        border-bottom: 1px solid #5e5e5e;
    }
    .buttons:{
        align-content:center !important;
    }
    .filter-button
    {    
        font-size: 16px;
        border: 1px solid #f6a607;
        border-radius: 5px;
        text-align: center;
        /* color: #f1863b; */
        color:#ffffff;
        margin-bottom: 10px;
        width: 150px;
        background-color: #f6a607;
        margin-left: auto;
        height: 60;
        margin-right: auto;


    }
    .filter-button:hover
    {
        font-size: 16px;
        border: 1px solid #0a0a0a;
        border-radius: 5px;
        text-align: center;
        color: #ffffff;
        background-color: #0a0a0a;
      

    }
    .btn-default:active .filter-button:active
    {
        background-color: #0a0a0a !important;
        color: white;
    }

    .port-image
    {
        width: 100%;
    }

    .gallery_product
    {
        margin-bottom: 30px;
}
</style>
<?php 

        // require_once 'config.php'; 
?>
   
   <!-- Gallery Page started-->
   <div class="div-sections  divelement-element py-4 position-relative div-sections-boxed div-sections-height-default div-sections-height-default mt-10">
    <div class="div-container div-column-gap-default position-static  ">
        <div class="div-column elementor-col-100 elementor-top-column divelement-element position-static" >
            <div class="p-0 position-static px-md-5 px-xl-0 div-widget-wrap divelement-element-populated">

                <div class="div-sections div-inner-section divelement-element div-sections-boxed div-sections-height-default div-sections-height-default">
                    <div class="div-container div-column-gap-default row align-items-center">
                        
                        <div class="col-12 col-md-12 col-lg-12 order-md-1 p-4">
                            <div class="p-5 div-widget-wrap divelement-element-populated">
                                <div class="divelement-element animated-fast div-widget div-widget-highlighted-heading animated fadeInDown">
                                    <div class="div-widget-container">
                                        <h2 class="gallery h1 mb-1 text-logo-color_siilc" style="text-align:center;"><?php echo $this->lang->line('homepage_photo_gallery'); ?></h2>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
   
    <div class="container">
        <div class="row buttons">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="category1">Category 1</button>
            <button class="btn btn-default filter-button" data-filter="category2">Category 2</button>
            <button class="btn btn-default filter-button" data-filter="category3">Category 3</button>
            <button class="btn btn-default filter-button" data-filter="category4">Category 4</button>
        </div>
        
        <div class="row" style="margin-bottom:75px;"></div>

        <div class="row">

            <?php /* if($result->num_rows > 0){ ?> 
                <div class="gallery"> 
                    <?php while($row = $result->fetch_assoc()){ ?> 
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
                    <?php } ?> 
                </div> 
            <?php }else{ ?> 
                <p class="status error">Image(s) not found...</p> 
            <?php } */?>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category1">
                <img src="<?php echo base_url();?>/assets/images/gallery/Picsart_23-03-11_16-43-03-497.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category2">
                <img src="<?php echo base_url();?>/assets/images/gallery/Picsart_23-03-11_16-43-03-497.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category1">
                <img src="<?php echo base_url();?>/assets/images/gallery/Picsart_23-03-11_16-43-03-497.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category3">
                <img src="<?php echo base_url();?>/assets/images/gallery/Picsart_23-03-11_16-43-03-497.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category4">
                <img src="<?php echo base_url();?>/assets/images/gallery/Picsart_23-03-14_12-20-43-728.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category3">
                <img src="<?php echo base_url();?>/assets/images/gallery/Picsart_23-03-14_12-25-17-669.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category4">
                <img src="<?php echo base_url();?>/assets/images/gallery/Picsart_23-03-14_12-35-57-237.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category3">
                <img src="<?php echo base_url();?>/assets/images/gallery/Picsart_23-03-11_16-43-03-497.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category3">
                <img src="<?php echo base_url();?>/assets/images/gallery/Picsart_23-03-14_13-00-29-665.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category1">
                <img src="<?php echo base_url();?>/assets/images/gallery/Picsart_23-03-11_16-43-03-497.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category4">
                <img src="<?php echo base_url();?>/assets/images/gallery/Picsart_23-03-14_13-00-29-665.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter category 2">
                <img src="<?php echo base_url();?>/assets/images/gallery/Picsart_23-03-11_16-43-03-497.jpg" class="img-responsive">
            </div>
        </div>
    </div>
    
    
    
    <script>
        $(document).ready(function(){

            $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');
               
                
                if(value == "all")
                {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                }
                else
                {
        //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
        //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');
                    
                }
            });
            
            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
            }
                $(this).addClass("active");
        
        });
    </script>