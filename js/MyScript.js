$(function () {

    var  container = $('#form_groupes');
    var BtnValider = $('.Valider');
    var wrapper = $('.ListeGroupes');
    var NbGroups, NbVotes, NbSieges;


    //Si le bouton valider est clické
    $(BtnValider).click(function () {
        wrapper.empty();

            NbGroups = $('#grps').val();
            NbVotes = $('#votes').val();
            NbSieges = $('#sieges').val();


            if  ( NbVotes <= 0 || NbSieges <= 0 || NbGroups <= 0) {
                console.log("NbGroups");
                console.log(NbGroups);

                $('#error').empty();
                $('#error').append("Tous les champs Obligatoires et doivent etre >= 0 !");

            } else {
                $('#form_elections').hide();
                wrapper.show();
                container.load('ListeGroupes.php', {'Nbgrps': NbGroups});
            }

    });



});

function GoBack() {
    // location.reload();
    $('.ListeGroupes').hide();
    $("#form_elections")[0].reset();
    $('#form_elections').show();
}

function Calculer() {
    var x;
    var DivResults = $('#results');
    var NbGroups = $('#grps').val();

    var NbSieges = $('#sieges').val();
    var NbVotes = $('#votes').val();

    DivResults.empty();
    DivResults.show();
    var votespargrp = [], nompargrp = [];

    for (x = 0; x < NbGroups ; x++)
    {
        var i = x + 1 ;
        var NomGrp = $('#NomGroupe' + i).val();
        var VotesParGrp = $('#Groupe_' + i).val();

        if (NomGrp === "" )
        {
            $('#NomGroupe' + i).attr("style", "border-width: 2px; border-color: red;");

        }else if( VotesParGrp < 0 ){

          $('#Groupe_' + i).attr("style", "border-width: 2px; border-color: red;");

        } else {
            nompargrp.push(NomGrp);
            votespargrp.push(VotesParGrp);

            $('.ListeGroupes').hide();
            DivResults.load('Etape1.php',{'nom_per_grp':nompargrp ,'vote_per_grp':votespargrp ,
                'Nbgrps': NbGroups,'Nbvotes': NbVotes  , 'Nbsieges': NbSieges  });

         }

    }

}


function Etape2()
{
    var x;
    var DivResults = $('#etape_finale');

    DivResults.empty();

    var NbGroups = $('#grps').val();

    var NbSieges = parseInt($('#sieges').val());
    var NbVotes = parseInt($('#votes').val());
    var NbSiegesDist = parseInt($('#NbSiegesDist').text());


    var nompargrp = [], votespargrp = [] , siegespargrp = [], SiegesDist = 0;


    for (x = 0; x < NbGroups ; x++)
    {
        var i = x + 1 ;
        var NomGrp = $('#NomGroupe' + i).val();
        var VoteGrp = parseInt($('#Groupe__' + i).html());
        var SiegeGrp = parseInt($('#Siege_' + i).html());

        SiegesDist += SiegeGrp;
        nompargrp.push(NomGrp);
        siegespargrp.push(SiegeGrp);
        votespargrp.push(VoteGrp);

    }

    $('#results').hide();
    DivResults.load('Etape2.php',{'nom_per_grp':nompargrp,'vote_per_grp':votespargrp,
        'Nbgrps': NbGroups,'Nbvotes': NbVotes  , 'Nbsieges': NbSieges,
        'NbSiegesDist':NbSiegesDist , 'siegespargrp': siegespargrp  });

}
