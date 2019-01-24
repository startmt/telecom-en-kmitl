<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?> >
<nav class="navbar navbar-light bg-faded white red">
  
          <div class="container">
            <div class="text-center">
                  </ul><ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                   <a href="/"><img style="width:auto; height:70px;" src="<?php bloginfo('template_url')?>/img/logo.png"  width="200px"></a>
                    </li>
                  
                  </ul>
</div>
                </div>
              </nav>
           
              
              <nav class="navbar navbar-toggleable-md navbar-light bg-faded subnavfixed"  data-spy="affix" data-offset-top="100">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
</button>
                    <div class="collapse navbar-collapse" id="nav-content"> 
                      <ul class="navbar-nav mr-auto">
                      </ul>
                      <ul class="navbar-nav mr-auto">
                            <li class="nav-item mr-sm-4 <?php if(is_page()):
                            else:
                            echo 'active';
                                endif?>">
                              <a class="nav-link" href="/">หน้าแรก <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mr-sm-4 <?php if(is_page(array('about','about/personal', 'about/introduce'))):
                            echo 'active';
                                endif?>">
                              <a class="nav-link" href="/about/"> เกี่ยวกับเรา</a>
                            </li>
                            <li class="nav-item mr-sm-4 <?php if(is_page('program')):
                            echo 'active';
                                endif?>">
                              <a class="nav-link" href="/program/">การเข้าศึกษา</a>
                            </li>
                            <li class="nav-item mr-sm-4 <?php if(is_page('research')):
                            echo 'active';
                                endif?>">
                                    <a class="nav-link" href="/research/">งานวิจัย</a>
                                  </li>
                                  <li class="nav-item mr-sm-4 <?php if(is_page('support')):
                            echo 'active';
                                endif?>">
                                        <a class="nav-link" href="/support/">ติดต่อ</a>
                                      </li>
                          </ul>
                          <ul class="navbar-nav"><li class="nav-item "><a class="nav-link" href="/admin/"><i class="fas fa-key"></i>staff</a></li></ul>
                                  </div>
                  </nav>

