$(function () {

    var  container = $('#form_groupes');
    var BtnValider = $('.Valider'); //Add button selector
    var wrapper = $('.ListeGroupes'); //Input field wrapper
    var x; //Initial field counter is 1
    var NbGroups;
    var DivID;
//$("#postdiv").load('posts.php',{'name' : 'Test','age' : 25});

    //Once add button is clicked
    $(BtnValider).click(function () {
        wrapper.empty();
        wrapper.show();

        NbGroups = $('#grps').val();
        var NbVotes = $('#votes').val();
        var NbSieges = $('#sieges').val();

        if (NbVotes < 0 || NbSieges < 0 || NbGroups < 0) {
            $('#error').empty();
            $('#error').append("Tous les champs sont Obligatoires et doivent etre >= 0 !");
        } else {
            $('#form_elections').hide();
            //container.load('ListeGroupes.php');
            container.load('ListeGroupes.php', {'Nbgrps': NbGroups});
        }
    });

});