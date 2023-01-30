//ux modal
// Get the modal
var uxmodal = document.getElementById("uxmodal");

// Get the button that opens the modal
var uxbtn = document.getElementById("ux");
// When the user clicks the button, open the modal 
uxbtn.onclick = function() {
    uxmodal.style.display = "block";
}
// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == uxmodal) {
//       uxmodal.style.display = "none";
//     }
//   }
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("modal-close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    uxmodal.style.display = "none";
}

//webdesignmodal
var wdesmodal = document.getElementById("wdesmodal");

var wdesbtn = document.getElementById("wdes");

wdesbtn.onclick = function() {
    wdesmodal.style.display = "block";
}




var wdesspan = document.getElementsByClassName("modal-close")[1];


wdesspan.onclick = function() {
    wdesmodal.style.display = "none";
}

//WebDevelopment
var wdevmodal = document.getElementById("wdevmodal");

var wdevbtn = document.getElementById("wdev");

wdevbtn.onclick = function() {
    wdevmodal.style.display = "block";
}


var wdevspan = document.getElementsByClassName("modal-close")[2];


wdevspan.onclick = function() {
    wdevmodal.style.display = "none";
}

//app development
var adevmodal = document.getElementById("adevmodal");

var adevbtn = document.getElementById("adev");

adevbtn.onclick = function() {
    adevmodal.style.display = "block";
}


var adevspan = document.getElementsByClassName("modal-close")[3];


adevspan.onclick = function() {
    adevmodal.style.display = "none";
}

//Application UI Design
var adumodal = document.getElementById("audmodal");

var audvbtn = document.getElementById("aud");

audvbtn.onclick = function() {
    adumodal.style.display = "block";
}


var audspan = document.getElementsByClassName("modal-close")[4];


audspan.onclick = function() {
    adumodal.style.display = "none";
}

//Mobile UI Design
var mudmodal = document.getElementById("mudmodal");

var mudbtn = document.getElementById("mud");

mudbtn.onclick = function() {
    mudmodal.style.display = "block";
}



var mudspan = document.getElementsByClassName("modal-close")[5];


mudspan.onclick = function() {
    mudmodal.style.display = "none";
}

//Business UI Design
var budmodal = document.getElementById("budmodal");

var budbtn = document.getElementById("bud");

budbtn.onclick = function() {
    budmodal.style.display = "block";
}



var budspan = document.getElementsByClassName("modal-close")[6];


budspan.onclick = function() {
    budmodal.style.display = "none";
}


//Furniture UI Design
var fudmodal = document.getElementById("fudmodal");

var fudbtn = document.getElementById("fud");

fudbtn.onclick = function() {
    fudmodal.style.display = "block";
}



var fudspan = document.getElementsByClassName("modal-close")[7];


fudspan.onclick = function() {
    fudmodal.style.display = "none";
}


//Real UI Design
var rudmodal = document.getElementById("rudmodal");

var rudbtn = document.getElementById("rud");

rudbtn.onclick = function() {
    rudmodal.style.display = "block";
}



var rudspan = document.getElementsByClassName("modal-close")[8];


rudspan.onclick = function() {
    rudmodal.style.display = "none";
}


//Blog Modal 1
var bm1modal = document.getElementById("bm1modal");

var bm1btn = document.getElementById("bm1");

bm1btn.onclick = function() {
    bm1modal.style.display = "block";
}



var bm1span = document.getElementsByClassName("modal-close")[9];


bm1span.onclick = function() {
    bm1modal.style.display = "none";
}

//Blog Modal 2
var bm2modal = document.getElementById("bm2modal");

var bm2btn = document.getElementById("bm2");

bm2btn.onclick = function() {
    bm2modal.style.display = "block";
}




var bm2span = document.getElementsByClassName("modal-close")[10];


bm2span.onclick = function() {
    bm2modal.style.display = "none";
}

//Blog Modal 3
var bm3modal = document.getElementById("bm3modal");

var bm3btn = document.getElementById("bm3");

bm3btn.onclick = function() {
    bm3modal.style.display = "block";
}

window.onclick = function(event) {
    if (event.target == bm3modal) {
        bm3modal.style.display = "none";
    }
    if (event.target == uxmodal) {
        uxmodal.style.display = "none";
      }
    if (event.target == wdesmodal) {
        wdesmodal.style.display = "none";
      }
      if (event.target == bm2modal) {
        bm2modal.style.display = "none";
    }  
    if (event.target == bm1modal) {
        bm1modal.style.display = "none";
    }
    if (event.target == rudmodal) {
        rudmodal.style.display = "none";
    }
    if (event.target == fudmodal) {
        fudmodal.style.display = "none";
    }
    if (event.target == budmodal) {
        budmodal.style.display = "none";
    }
    if (event.target == mudmodal) {
        mudmodal.style.display = "none";
    }
    if (event.target == adumodal) {
        adumodal.style.display = "none";
    }
    if (event.target == adevmodal) {
        adevmodal.style.display = "none";
      }
      if (event.target == wdevmodal) {
        wdevmodal.style.display = "none";
      }
  }


var bm3span = document.getElementsByClassName("modal-close")[11];


bm3span.onclick = function() {
    bm3modal.style.display = "none";
}



//% counting
function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start)+"%";
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }
  
  const obj1 = document.getElementById("value1");
  const obj2 = document.getElementById("value2");
  const obj3 = document.getElementById("value3");
  const obj4 = document.getElementById("value4");
  animateValue(obj1, 0, 75, 5000);
  animateValue(obj2, 0, 85, 5000);
  animateValue(obj3, 0, 95, 5000);
  animateValue(obj4, 0, 80, 5000);

//take to top
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }
//navabar_scroll Ui-Design

document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        if (window.scrollY > 150) {
          document.getElementById('navbar_top').classList.add('navtop');
          // add padding top to show content behind navbar
          navbar_height = document.querySelector('.nav').offsetHeight;
          document.body.style.paddingTop = navbar_height + 'px';
        } else {
          document.getElementById('navbar_top').classList.remove('navtop');
           // remove padding top from body
          document.body.style.paddingTop = '0';
        } 
    });
  }); 
  //up button show
  document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        if (window.scrollY > 150) {
          document.getElementById('upbtn').style.display = 'block';
        } else {
          document.getElementById('upbtn').style.display = 'none';
        } 
    });
  }); 
//navabar_current
var ul = document.querySelectorAll('.nav a');
// console.log(ul.length);
ul.forEach(item=>{
    item.addEventListener('click', (event) => {
        event.preventDefault();
        if(item.classList == 'current'){
            //item.classList.remove('current')
        }else{
            ul.forEach(item=>{
                if(item.classList == 'current'){
                    item.classList.remove('current');
                }
            });
            item.classList = 'current';
            var id = item.id;
           var secname = id.charAt(id. length-1);
        //    console.log(secname);
            location.href = "#"+secname;
        }


})
});
//div four nav current and block
var navbtn = document.querySelectorAll('.divfour button');
console.log(navbtn.length);
navbtn.forEach(item=>{
    item.addEventListener('click', (event) => {
        event.preventDefault();
        if(item.classList == 'current'){
            //item.classList.remove('current')
        }else{
            navbtn.forEach(item=>{
                if(item.classList == 'current'){
                    item.classList.remove('current');
                }
            });
            item.classList = 'current';
            if(item.id == 'products'){
                document.getElementById('cmud').style.display = 'none';
                document.getElementById('cbud').style.display = 'none';
                document.getElementById('cfud').style.display = 'block';
                document.getElementById('caud').style.display = 'block';
                document.getElementById('crud').style.display = 'block';
            }
            if(item.id == 'web'){
                document.getElementById('caud').style.display = 'none';
                document.getElementById('cfud').style.display = 'none';
                document.getElementById('cmud').style.display = 'none';
                document.getElementById('cbud').style.display = 'none';
                document.getElementById('crud').style.display = 'block';
            }
            if(item.id == 'inter'){
                document.getElementById('caud').style.display = 'none';
                document.getElementById('crud').style.display = 'none';
                document.getElementById('cmud').style.display = 'none';
                document.getElementById('cbud').style.display = 'none';
                document.getElementById('cfud').style.display = 'block';
            }
            if(item.id == 'brand'){
                document.getElementById('caud').style.display = 'none';
                document.getElementById('crud').style.display = 'none';
                document.getElementById('cmud').style.display = 'none';
                document.getElementById('cfud').style.display = 'block';
                document.getElementById('cbud').style.display = 'block';
            }
            if(item.id == 'all'){
                document.getElementById('caud').style.display = 'block';
                document.getElementById('crud').style.display = 'block';
                document.getElementById('cmud').style.display = 'block';
                document.getElementById('cfud').style.display = 'block';
                document.getElementById('cbud').style.display = 'block';
            }
        }


})
});

// TypreWriter.js
var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.05em solid orange}";
    document.body.appendChild(css);
};
//Cursor Effect


const { gsap, CircleType } = window;

const cursorOuter = document.querySelector(".cursor--large");
const cursorInner = document.querySelector(".cursor--small");
const cursorTextContainerEl = document.querySelector(".cursor--text");
const cursorTextEl = cursorTextContainerEl.querySelector(".text");

const hoverItems = document.querySelectorAll(".cursor-hover-item");
const hoverEffectDuration = 0.3;
let isHovered = false;
let initialCursorHeight;

const cursorRotationDuration = 8;

let circleType = new CircleType(cursorTextEl);
circleType.radius(50);

setTimeout(() => {
initialCursorHeight = circleType.container.style.getPropertyValue("height");
// console.log(initialCursorHeight);
}, 50);

hoverItems.forEach((item) => {
item.addEventListener("pointerenter", handlePointerEnter);
item.addEventListener("pointerleave", handlePointerLeave);
});

let mouse = {
x: -100,
y: -100
};

document.body.addEventListener("pointermove", updateCursorPosition);

function updateCursorPosition(e) {
mouse.x = e.pageX;
mouse.y = e.pageY;
}

function updateCursor() {
gsap.set([cursorInner, cursorTextContainerEl], {
    x: mouse.x,
    y: mouse.y
});

gsap.to(cursorOuter, {
    duration: 0.15,
    x: mouse.x,
    y: mouse.y
});

if (!isHovered) {
    gsap.to(cursorTextContainerEl, hoverEffectDuration * 0.5, {
        opacity: 0
    });
    gsap.set(cursorTextContainerEl, {
        rotate: 0
    });
}

requestAnimationFrame(updateCursor);
}

updateCursor();

function handlePointerEnter(e) {
isHovered = true;

const target = e.currentTarget;
updateCursorText(target);

gsap.set([cursorTextContainerEl, cursorTextEl], {
    height: initialCursorHeight,
    width: initialCursorHeight
});

gsap.fromTo(
    cursorTextContainerEl,
    {
        rotate: 0
    },
    {
        duration: cursorRotationDuration,
        rotate: 360,
        ease: "none",
        repeat: -1
    }
);

gsap.to(cursorInner, hoverEffectDuration, {
    scale: 2
});

gsap.fromTo(
    cursorTextContainerEl,
    hoverEffectDuration,
    {
        scale: 1.2,
        opacity: 0
    },
    {
        delay: hoverEffectDuration * 0.75,
        scale: 1,
        opacity: 1
    }
);
gsap.to(cursorOuter, hoverEffectDuration, {
    scale: 1.2,
    opacity: 0
});
}

function handlePointerLeave() {
isHovered = false;
gsap.to([cursorInner, cursorOuter], hoverEffectDuration, {
    scale: 1,
    opacity: 1
});
}

function updateCursorText(textEl) {
const cursorTextRepeatTimes = textEl.getAttribute("data-cursor-text-repeat");
const cursorText = returnMultipleString(
    textEl.getAttribute("data-cursor-text"),
    cursorTextRepeatTimes
);

circleType.destroy();

cursorTextEl.innerHTML = cursorText;
circleType = new CircleType(cursorTextEl);
}

function returnMultipleString(string, count) {
let s = "";
for (let i = 0; i < count; i++) {
    s += ` ${string} `;
}
return s;
}