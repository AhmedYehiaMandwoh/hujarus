<template>
  <!-- Video Background Start -->
  <div class="video-background">
    <video autoplay muted loop class="video-background__video">
      <source src="/theme-front/hajar.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
    <div class="video-overlay">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-lg-8 text-left">
            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">
                Make your own migration 
            </h5>
            <h1 class="display-3 text-white animated slideInDown">
                Hijrah Online Academy (migration)
            </h1>
            <p class="fs-5 text-white mb-4 pb-2">
              حَدَّثَنَا حُمَيْدُ بْنُ مَسْعَدَةَ، حَدَّثَنَا جَعْفَرُ بْنُ
              سُلَيْمَانَ، عَنِ الْمُعَلَّى بْنِ زِيَادٍ، عَنْ مُعَاوِيَةَ بْنِ
              قُرَّةَ، عَنْ مَعْقِلِ بْنِ يَسَارٍ، قَالَ قَالَ رَسُولُ ـ صلى
              الله عليه وسلم ـ ‏ "‏ الْعِبَادَةُ فِي الْهَرْجِ كَهِجْرَةٍ
              إِلَىَّ ‏"‏ ‏.‏ It was narrated from Ma’qil bin Yasar that the
              Messenger of Allah (ﷺ) said: “Worship during the time of bloodshed
              is like emigrating to me.”Sunan Ibn Majah 3985
            </p>
            <Link
              href="/enroll"
              class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
              >Enroll Now</Link>
            <Link
              href="/enroll"
              class="btn btn-light py-md-3 px-md-5 animated slideInRight"
              ><i class="fa fa-link"></i> Free Trial</Link>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Video Background End -->
</template>
  
  <script>
export default {
  // Remove any unused imports related to the carousel
};
</script>
  
  <style scoped>
.video-background {
  position: relative;
  width: 100%;
  height: 100vh; /* Full height */
  overflow: hidden;
}

.video-background__video {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  height: 100%;
  object-fit: cover; /* Cover the entire area */
  transform: translate(-50%, -50%);
  z-index: 1; /* Send the video behind the overlay */
}

.video-overlay {
  position: relative;
  z-index: 2; /* Bring the overlay content above the video */
  background: rgba(24, 29, 56, 0.7); /* Semi-transparent background */
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center; /* Center the content */
  text-align: left; /* Align text to the left */
}

.text-primary {
  color: #007bff; /* Primary color for text */
}
</style>
  