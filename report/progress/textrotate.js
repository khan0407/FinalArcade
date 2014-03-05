var SVGNS='http://www.w3.org/2000/svg',XLINKNS='http://www.w3.org/1999/xlink';

function textrotate_make_svg(el)
{
  var string=el.firstChild.nodeValue;

  // Add absolute-positioned string (to measure length)
  var abs=document.createElement('div');
  abs.appendChild(document.createTextNode(string));
  abs.style.position='absolute';
  el.parentNode.insertBefore(abs,el);
  var textWidth=abs.offsetWidth,textHeight=abs.offsetHeight;
  el.parentNode.removeChild(abs);

  // Create SVG
  var svg=document.createElementNS(SVGNS,'svg');
  svg.setAttribute('version','1.1');
  var width=(textHeight*9)/8;
  svg.setAttribute('width',width);
  svg.setAttribute('height',textWidth+20);

  // Add text
  var text=document.createElementNS(SVGNS,'text');
  svg.appendChild(text);
  text.setAttribute('x',textWidth);
  text.setAttribute('y',-textHeight/4);
  text.setAttribute('text-anchor','end');
  text.setAttribute('transform','rotate(90)');
  text.appendChild(document.createTextNode(string));

  // Is there an icon near the text?
  var icon=el.parentNode.firstChild;
  if(icon.nodeName.toLowerCase()=='img') {
    el.parentNode.removeChild(icon);
    var image=document.createElementNS(SVGNS,'image');
    var iconx=el.offsetHeight/4;
    if(iconx>width-16) iconx=width-16;
    image.setAttribute('x',iconx);
    image.setAttribute('y',textWidth+4);
    image.setAttribute('width',16);
    image.setAttribute('height',16);
    image.setAttributeNS(XLINKNS,'href',icon.src);
    svg.appendChild(image);
  }

  // Replace original content with this new SVG
  el.parentNode.insertBefore(svg,el);
  el.parentNode.removeChild(el);
}

<<<<<<< HEAD
function textrotate_init() {
  var elements=YAHOO.util.Dom.getElementsByClassName('completion-activityname', 'span');
=======
function browser_supports_svg() {
    return document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure", "1.1");
}

function textrotate_init() {
    if (!browser_supports_svg()) {
        // Feature detect, else bail.
        return;
    }

YUI().use('yui2-dom', function(Y) {
  var elements= Y.YUI2.util.Dom.getElementsByClassName('completion-activityname', 'span');
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
  for(var i=0;i<elements.length;i++)
  {
    var el=elements[i];
    el.parentNode.parentNode.parentNode.style.verticalAlign='bottom';
    textrotate_make_svg(el);
  }

<<<<<<< HEAD
  elements=YAHOO.util.Dom.getElementsByClassName('completion-expected', 'div');
=======
  elements= Y.YUI2.util.Dom.getElementsByClassName('completion-expected', 'div');
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
  for(var i=0;i<elements.length;i++)
  {
    var el=elements[i];
    el.style.display='inline';
    var parent=el.parentNode;
    parent.removeChild(el);
    parent.insertBefore(el,parent.firstChild);
    textrotate_make_svg(el.firstChild);
  }

<<<<<<< HEAD
  elements=YAHOO.util.Dom.getElementsByClassName('rotateheaders', 'table');
  for(var i=0;i<elements.length;i++)
  {
    var table=elements[i];
    var headercells = YAHOO.util.Dom.getElementsByClassName('header', 'th', table);
=======
  elements= Y.YUI2.util.Dom.getElementsByClassName('rotateheaders', 'table');
  for(var i=0;i<elements.length;i++)
  {
    var table=elements[i];
    var headercells = Y.YUI2.util.Dom.getElementsByClassName('header', 'th', table);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    for(var j=0;j<headercells.length;j++)
    {
      var el=headercells[j];
      textrotate_make_svg(el.firstChild);
    }
  }
<<<<<<< HEAD
}

YAHOO.util.Event.onDOMReady(textrotate_init);

=======
});
}

>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
