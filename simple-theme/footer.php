<footer class="site-footer">
 <p>&copy; 2018 CX Studio</p>
</footer>
<script>
document.addEventListener("DOMContentLoaded",function(){
    var topmenu = document.getElementById('topmenu'); 
    var menuclose = document.getElementById('menu-close');
    var menu = document.getElementById('sidebar-menu');
    menuclose.addEventListener("click",function(e){
        removeClass(menu,'slideRight');
    });
    topmenu.addEventListener("click",function(){
        addClass(menu,'slideRight');
    });
},false);
function hasClass(ele, cls){
    cls = cls || '';
    if(cls.replace(/\s/g,'').length == 0) return false;
    return new RegExp(' ' + cls + ' ').test(' ' + ele.className + ' ');
}
function addClass(ele, cls){
  if (!hasClass(ele, cls)){
    ele.className = ele.className == '' ? cls : ele.className + ' ' + cls;
  }
}
function removeClass(ele,cls){
    if(hasClass(ele,cls)){
    var newClass = ' ' + ele.className.replace(/[\t\r\n]/g, '') + ' ';
    while (newClass.indexOf(' ' + cls + ' ') >= 0) {
      newClass = newClass.replace(' ' + cls + ' ', ' ');
    }
    ele.className = newClass.replace(/^\s+|\s+$/g, '');
  }
}
</script>
</body>
</html>
