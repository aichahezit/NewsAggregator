<h2 id="aboveSlider">The 5 Newest Articles</h2>
<section class="slider">
    <div class="container">
      <div class="flexslider" id="mainslider">
        <ul class="slides">
        <?php $i = 0?>
          @foreach($data as $item)
          <?php 
          	$i = $i + 1;
          	if($i >= 6){
          		break;
          	}
          ?>
          <li>
            <a href={!! $item['link'] !!} target="_blank"><h3><strong>{!! $item['title'] !!}</strong></h3></a>
            <br/><br/>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
</section>
  <section id="featured" class="row mt40">
    <div class="container">
      <h1 class="heading1">
      	<span class="maintext">Latest News</span>
        <span class="subtext"> See Our Latest Breaking News</span>
      </h1>
       </div>
  </section>
   <div class="container" >
    @foreach($data as $item)
            <div class="inlineArticle">
                    <img id="inlineImage" alt="news" width="80px" height="80px" src="<?php echo url();?>/user/img/<?php echo $item['tag'] ?>.png ">
                    <a id="inlineTitle" href={!! $item['link'] !!} target="_blank"><h2>{!! $item['title'] !!}</h2></a>
                <h5 id="inlineDescription">{!! $item['description'] !!}</h5>
                <h5 id="inlinePubDate">{!! $item['pub_date'] !!}</h5>
            </div>
        <hr/>
    @endforeach
</div>
{!! $data->render() !!}
    
   
