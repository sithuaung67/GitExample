/**
 * Created by root on 6/24/18.
 */
$("#myForm").on('submit',function (e) {
    e.preventDefault();
    var name=$("#name").val();
    var List=$("#myList");
    List.append("<li>" + name + "</li>");
    $("#name").val('');
});


/*$("#name").on('change',function(){
$("#myForm").submit();});*/

