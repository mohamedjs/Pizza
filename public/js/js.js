$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function check_empty() {
if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully...");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

///////////////// category ////////////////////////
  $('#addca').click(function(e){
        e.preventDefault();
        $.ajax({
          type:'post',
          url:'\\addca',
          data: $('.addca').serialize(),
          success : function (data){
            data = JSON.parse(data);
             $('#cat_table > tbody:last-child').
             append('<tr id="cate'+data.id+'">'+
               '<td>'+data.id+'</td>'+
               '<td id="category'+data.id+'">'+data.category_name+'</td>'+
               '<td><button type="submit" class="btn btn-primary" id="cat'+data.id+'" onclick="updatecat('+data.id+')">Update</button></td>'+
               '<td><button type="submit" class="btn btn-primary" id="cat'+data.id+'" onclick="deletecat('+data.id+')">Delet</button></td>'+
             '</tr>');
             console.log(data);
          },
        });
      });
  function deletecat(id) {
    console.log(id);
      $.ajax({
        type:'post',
        url:'\\deletcat',
        data:{
          id:id,
        },
        success:function (data) {
          console.log("delet sucess");
          console.log(data);
          $('#cate'+id+'').remove();
        }
      });
  }
  function updatecat(id) {
    console.log(id);
      $.ajax({
        type:'post',
        url:'\\updatecat',
        data:{
          cat_id:id,
        },
        success:function (data) {
          console.log(data);
          console.log(id);
          cat_name=document.getElementById('category'+id+'').innerHTML;
          console.log(cat_name);
          document.getElementById('cateory').value=cat_name;
          $('#cate'+id+'').remove();
        }
      });
    }
///////////////// subcategory ////////////////////////
$('#addsubca').click(function(e){
  e.preventDefault();
  $.ajax({
    type:'post',
    url:'\\addsubca',
    data: $('.addsubca').serialize(),
    success : function (data){
      data = JSON.parse(data);
      catn=document.getElementById('s'+data.category_id+'').innerHTML;
       $('#subcat_table > tbody:last-child').
       append('<tr id="subcate'+data.id+'">'+
         '<td>'+data.id+'</td>'+
         '<td>'+catn+'</td>'+
         '<td id="subcategory'+data.id+'">'+data.sub_name+'</td>'+
         '<td><button type="submit" class="btn btn-primary" id="subcat'+data.id+'" onclick="updatesubcat('+data.id+')">Update</button></td>'+
         '<td><button type="submit" class="btn btn-primary" id="subcat'+data.id+'" onclick="deletesubcat('+data.id+')">Delet</button></td>'+
       '</tr>');
       console.log(data);
    },
  });
});
function deletesubcat(id) {
  console.log(id);
  $.ajax({
    type:'post',
    url:'\\deletsubcat',
    data:{
      id:id,
    },
    success:function (data) {
      console.log("delet sucess");
      console.log(data);
      $('#subcate'+id+'').remove();
    }
  });
  }
    function updatesubcat(id) {
        console.log(id);
        $.ajax({
          type:'post',
          url:'\\updatesubcat',
          data:{
            subcat_id:id,
          },
          success:function (data) {
            console.log(data);
            console.log(id);
            subcat_name=document.getElementById('subcategory'+id+'').innerHTML;
            console.log(subcat_name);
            document.getElementById('subcategory').value=subcat_name;
            $('#subcate'+id+'').remove();
          }
        });
        }
///////////////// pizzzzzzzzzzza ////////////////////////
$('#addpizza').click(function(e){
      e.preventDefault();
      $.ajax({
        type:'post',
        url:'\\addpizza',
        data: $('.addpiz').serialize(),
        success : function (data){
          data = JSON.parse(data);
          console.log('success');
          //  $('#pizza_table > tbody:last-child').
          //  append('<tr id="cate'+data.id+'">'+
          //    '<td>'+data.id+'</td>'+
          //    '<td>'+data.id+'</td>'+
          //    '<td>'+data.id+'</td>'+
          //    '<td>'+data.id+'</td>'+
          //    '<td>'+data.id+'</td>'+
          //    '<td>'+data.id+'</td>'+
          //    '<td>'+data.id+'</td>'+
          //    '<td>'+data.id+'</td>'+
          //    '<td id="category'+data.id+'">'+data.category_name+'</td>'+
          //    '<td><button type="submit" class="btn btn-primary" id="pizza'+data.id+'" onclick="updatepizza('+data.id+')">Update</button></td>'+
          //    '<td><button type="submit" class="btn btn-primary" id="pizza'+data.id+'" onclick="deletepizza('+data.id+')">Delet</button></td>'+
          //  '</tr>');
           console.log(data);
        },
      });
    });

function deletepizza(id) {
  console.log(id);
    $.ajax({
      type:'post',
      url:'\\deletpizza',
      data:{
        id:id,
      },
      success:function (data) {
        console.log("delet sucess");
        console.log(data);
        $('#pizza'+id+'').remove();
      }
    });
}
// function updatepizza(id) {
//   console.log(id);
//     $.ajax({
//       type:'post',
//       url:'\\updatecat',
//       data:{
//         cat_id:id,
//       },
//       success:function (data) {
//         console.log(data);
//         console.log(id);
//         cat_name=document.getElementById('category'+id+'').innerHTML;
//         console.log(cat_name);
//         document.getElementById('cateory').value=cat_name;
//         $('#cate'+id+'').remove();
//       }
//     });
//   }
/////////////////product//////////////////////
$('.sel').change(function(e){
	console.log('ok');
			e.preventDefault();
			$.ajax({
				type:'post',
				url:'\\size',
				data: {
					size:$('.sel').val(),
					id:$('.sss').val()
				},
				success : function (data){
					document.getElementById('pr').innerHTML="";
					document.getElementById('pr').innerHTML=data;
				},
			});
		});
$('.ac').click(function(e){
  console.log(document.getElementById('pr').innerHTML);
			e.preventDefault();
			$.ajax({
				type:'post',
				url:'../../buy',
				data: {
					product_id:$('.sss').val(),
					price:document.getElementById('pr').innerHTML
				},
				success : function (data){
          console.log(data);
          size=document.getElementById('navbar-totals').innerHTML
					document.getElementById('navbar-totals').innerHTML="";
					document.getElementById('navbar-totals').innerHTML=parseInt(size)+1;
          record='  <div class="col-md-8">'+
              '<h4>'+document.getElementById('p_name').innerHTML+'</h4>'+
            '</div>'+
            '<div class="col-md-4">'+
              '<h4>'+data.price+'</h4>'+
            '</div>';
            $('#mini-cart').append(record);
				}
			});
});
//////////////////////////////////////////////////////////////////
