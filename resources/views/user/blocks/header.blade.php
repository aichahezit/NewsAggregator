<header>
  <div class="headerstrip">
    <div class="container">
      <div class="row">
        <div class="span12">
          <!-- Top Nav Start -->
          <div class="pull-left">
            <div class="navbar" id="topnav">
              <div class="navbar-inner">
                <ul class="nav" >
                  <li><a class="home active" href="<?php echo url(); ?>"><strong>News Aggregator Home</strong></a>
                  </li>
                  <?php $tag = DB::table('feed')->get(); ?>
                  @foreach ($tag as $item) 
                  <li><a class="home active" href="<?php echo url().'/'.$item->tag; ?>">{!! $item->tag !!}</a>
                  </li>
                  @endforeach
                  <li>
                    <a href="<?php echo url().'/refresh' ?>">
                      <img alt="news" src="<?php echo url();?>/user/img/update.png"></a>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Top Nav End -->
        </div>
      </div>
    </div>
  </div>
</header>