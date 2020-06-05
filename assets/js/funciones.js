document.addEventListener('DOMContentLoaded', function() {
	M.AutoInit();
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
    
    var elems2 = document.querySelectorAll('.sidenav2');
    var instances = M.Sidenav.init(elems2,{edge : 'right'});
    
    var elems = document.querySelectorAll('.chips');
    var instances = M.Chips.init(elems);
    
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);
    
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
   
    
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
    
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });

