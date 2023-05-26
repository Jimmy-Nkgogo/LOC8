
// Define an array of category objects, each with a category ID and path to Lottie file
var categories = [
    { id: 'developer', path: 'https://assets3.lottiefiles.com/packages/lf20_cmaqoazd.json' },
    { id: 'eletrician', path: 'https://assets8.lottiefiles.com/packages/lf20_b3a1wyt0.json' },
    { id: 'carpentry', path: 'https://assets9.lottiefiles.com/packages/lf20_qlmz8afc.json' },
    { id: 'gardener', path: 'https://assets8.lottiefiles.com/packages/lf20_kneqbtiw.json' },
    { id: 'tutor', path: 'https://assets10.lottiefiles.com/packages/lf20_eTM2vQ.json' },
    { id: 'transport', path: 'https://assets4.lottiefiles.com/packages/lf20_ssgfizby.json' },
    { id: 'builder', path: 'https://assets2.lottiefiles.com/packages/lf20_bsatc9vq.json' },
    { id: 'plumbing', path: 'https://assets9.lottiefiles.com/packages/lf20_teqtg9.json' },
    { id: 'hygiene', path: 'https://assets7.lottiefiles.com/packages/lf20_yquwktp5.json' },
    { id: 'sport', path: 'https://assets2.lottiefiles.com/packages/lf20_JkRdsa6Exx.json' },
    { id: 'welding', path: 'https://assets1.lottiefiles.com/packages/lf20_pbja3c1s.json' },
    { id: 'painter', path: 'https://assets9.lottiefiles.com/packages/lf20_twxv8mn4.json' },
    { id: 'event', path: 'https://assets5.lottiefiles.com/packages/lf20_yogqMMhCr0.json' },
    { id: 'camera', path: 'https://assets10.lottiefiles.com/packages/lf20_jhlaooj5.json' },
  ];
  
  // Loop through the array of category objects
  categories.forEach(function(category) {
    var container = document.getElementById(category.id);
    var animation = bodymovin.loadAnimation({
      container: container,
      renderer: 'svg',
      loop: true,
      autoplay: false,
      path: category.path // Use the path from the current category object
    });
  
    container.addEventListener('mouseenter', function() {
      animation.play();
    });
  
    container.addEventListener('mouseleave', function() {
      animation.stop();
    });
  });

