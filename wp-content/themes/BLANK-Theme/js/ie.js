var curvyCornersNoAutoScan = true;
  window.onload = function() {
    var settings1 = {
      tl: { radius: 0 },
      tr: { radius: 0 },
      bl: { radius: 0 },
      br: { radius: 20 },
      antiAlias: true
    }
    
    var settings2 = {
      tl: { radius: 0 },
      tr: { radius: 10 },
      bl: { radius: 0 },
      br: { radius: 0 },
      antiAlias: true
    }
    
    var settings3 = {
      tl: { radius: 20 },
      tr: { radius: 20 },
      bl: { radius: 20 },
      br: { radius: 20 },
      antiAlias: true
    }

    var divCont = document.getElementById("header");
    var divFoot = document.getElementById("footer");

    curvyCorners(settings1, divCont);
    curvyCorners(settings2, divFoot);
    curvyCorners(settings3, "#content h5"); 
  }