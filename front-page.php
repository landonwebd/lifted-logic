<?php get_header(); 
  $bannerHeading = get_field('banner_heading');
  $bannerParagraph = get_field('banner_paragraph');
  $bannerImage = get_field('banner_image');
  $contentBlockHeading = get_field('content_block_heading');
  $contentBlockParagraph = get_field('content_block_paragraph');
  $contentBlockLink = get_field('content_block_link');
  $contentBlockImage = get_field('content_block_image');
  $callOutHeading = get_field('call_out_heading');
  $callOutParagraph = get_field('call_out_paragraph');
  $formTitle = get_field('form_title');
  $formParagraph = get_field('form_paragraph');
  $formImage = get_field('form_image');
?>


<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo esc_url($bannerImage['sizes']['pageBanner']); ?>)"></div>
  <div class="container">
    <div class="page-banner__content ">
      <h1 class="headline headline--large"><?php echo $bannerHeading; ?></h1>
      <?php echo $bannerParagraph; ?>
      <a href="#" class="watch-video">
        <span class="video-svg">
          <svg width="60" height="60" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 10L5 18.6603L5 1.33974L20 10Z" fill="black"/>
          </svg>
        </span>
        <span class="watch-video-text">Watch Video</span>
      </a>
    </div>
  </div>
</div>

<div class="container">
  <div class="content-block">
    <div class="content-block-image" style="background-image: url(<?php echo esc_url($contentBlockImage['sizes']['large']); ?>)"></div>
    <div class="content-block-content">
      <h3><?php echo $contentBlockHeading; ?></h3>
      <span class="content-block-paragraph"><?php echo $contentBlockParagraph; ?></span>
      <a href="<?php echo esc_url($contentBlockLink['url']); ?>" class="btn"><?php echo esc_html($contentBlockLink['title']); ?></a>
    </div>
  </div>
</div>

<div class="call-out">
  <div class="container call-out-content">
    <h3><?php echo $callOutHeading; ?></h3>
    <span class="call-out-paragraph"><?php echo $callOutParagraph; ?></span>
  </div>
</div>

<div class="glide">
  <div data-glide-el="track" class="glide__track">
    <div class="glide__slides">
      <?php
        $slideshow = get_field('slideshow');
        if ($slideshow) {
          foreach($slideshow as $slide) { 
            $backgroundImage = get_field('slide_image', $slide->ID);
            $slideHeading = get_field('slide_title', $slide->ID);
            $slideArtist = get_field('slide_artist', $slide->ID);
            $slideParagraph = get_field('slide_paragraph', $slide->ID);
            ?>
            <div class="glide__slide">
              <div class="slide-block-image">
                <img src="<?php echo esc_url($backgroundImage['sizes']['large']); ?>" alt="">
              </div>
              <div class="slide-block-content">
                <h4><?php echo $slideHeading; ?></h4>
                <span class="slide-artist"><?php echo $slideArtist; ?></span>
                <?php echo $slideParagraph; ?>
              </div>
            </div>
          <?php }
        }
      ?>
    </div>

  </div>
  <div class="glide__arrows" data-glide-el="controls">
    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_109_1514)">
        <path d="M6.27429 8.20577C6.24664 8.17911 6.22464 8.14716 6.20962 8.11181C6.1946 8.07647 6.18686 8.03846 6.18686 8.00005C6.18686 7.96165 6.1946 7.92363 6.20962 7.88829C6.22464 7.85294 6.24664 7.82099 6.27429 7.79434L12.1143 1.95434C12.2214 1.84809 12.3064 1.72169 12.3645 1.58242C12.4225 1.44316 12.4523 1.29378 12.4523 1.14291C12.4523 0.992038 12.4225 0.84266 12.3645 0.703392C12.3064 0.564125 12.2214 0.437723 12.1143 0.33148C11.9002 0.118622 11.6105 -0.000854492 11.3086 -0.000854492C11.0067 -0.000854492 10.717 0.118622 10.5029 0.33148L4.04572 6.78862C3.72746 7.11151 3.54904 7.54668 3.54904 8.00005C3.54904 8.45343 3.72746 8.88859 4.04572 9.21148L10.5029 15.6686C10.717 15.8815 11.0067 16.001 11.3086 16.001C11.6105 16.001 11.9002 15.8815 12.1143 15.6686C12.2214 15.5624 12.3064 15.436 12.3645 15.2967C12.4225 15.1574 12.4523 15.0081 12.4523 14.8572C12.4523 14.7063 12.4225 14.5569 12.3645 14.4177C12.3064 14.2784 12.2214 14.152 12.1143 14.0458L6.27429 8.20577Z" fill="black"/>
        </g>
        <defs>
        <clipPath id="clip0_109_1514">
        <rect width="16" height="16" fill="white"/>
        </clipPath>
        </defs>
      </svg>
    </button>
    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_109_1509)">
        <path d="M3.88572 15.6686C3.77861 15.5624 3.69358 15.436 3.63556 15.2967C3.57754 15.1574 3.54767 15.0081 3.54767 14.8572C3.54767 14.7063 3.57754 14.5569 3.63556 14.4177C3.69358 14.2784 3.77861 14.152 3.88572 14.0458L9.72572 8.20577C9.75338 8.17911 9.77537 8.14716 9.79039 8.11181C9.80542 8.07647 9.81316 8.03846 9.81316 8.00005C9.81316 7.96165 9.80542 7.92363 9.79039 7.88829C9.77537 7.85294 9.75338 7.82099 9.72572 7.79434L3.88572 1.95434C3.77861 1.84809 3.69358 1.72169 3.63556 1.58242C3.57754 1.44316 3.54767 1.29378 3.54767 1.14291C3.54767 0.992038 3.57754 0.84266 3.63556 0.703392C3.69358 0.564125 3.77861 0.437723 3.88572 0.33148C4.09985 0.118622 4.38951 -0.000854492 4.69144 -0.000854492C4.99336 -0.000854492 5.28302 0.118622 5.49715 0.33148L11.9543 6.78862C12.2726 7.11151 12.451 7.54668 12.451 8.00005C12.451 8.45343 12.2726 8.88859 11.9543 9.21148L5.49715 15.6686C5.28302 15.8815 4.99336 16.001 4.69144 16.001C4.38951 16.001 4.09985 15.8815 3.88572 15.6686Z" fill="black"/>
        </g>
        <defs>
        <clipPath id="clip0_109_1509">
        <rect width="16" height="16" fill="white"/>
        </clipPath>
        </defs>
      </svg>
    </button>
  </div>
</div>

<div class="generic-content">
  <?php the_content(); ?>
  <div class="acf-map">
  <?php $mapLocation = get_field('lifted_logic_location')?>
    <div class="marker" data-lat="<?php echo $mapLocation['lat']; ?>" 
          data-lng="<?php echo $mapLocation['lng']; ?>">
      <h3>Lifted Logic</h3>
      <?php echo $mapLocation['address']; ?>
    </div>
  </div>
</div>

<div class="container form-section">
  <div class="form-field">
    <h3><?php echo $formTitle; ?></h3>
    <span class="form-paragraph"><?php echo $formParagraph; ?></span>
    <span class="error-field hide"></span>
    <form action="" method="" class="form-section-form">
      <div class="input-field" id="input-first-name">
        <label for="first-name">First Name*</label>
        <input type="text" id="first-name" name="first-name" placeholder="First Name">
      </div>
      <div class="input-field" id="input-last-name">
        <label for="last-name">Last Name*</label>
        <input type="text" id="last-name" name="last-name" placeholder="Last Name">
      </div>
      <div class="input-field" id="input-email">
        <label for="form-email">Email*</label>
        <input type="email" name="form-email" id="form-email" placeholder="Email">
      </div>
      <div class="input-field" id="input-contact">
        <label for="reason-for-contact">Reason for Contacting*</label>
        <select name="reason-for-contact" id="reason-for-contact">
          <option value="">Select One</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </div>
      <div class="input-field" id="input-message">
        <label for="form-message">Message (Optional)</label>
        <textarea name="form-message" id="form-message" placeholder="Write a brief message" rows="8"></textarea>
      </div>
      <input id="input-submit" type="submit" value="Submit" class="btn">
    </form>
  </div>
  <div class="form-image" style="background-image: url(<?php echo esc_url($formImage['sizes']['formImage']); ?>)"></div>
</div>

<?php get_footer(); ?>