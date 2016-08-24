$("document").ready(function(){
		$(".supprimer").click(function(){
			var supid = $(this).attr('id');
			console.log(supid);
			$.ajax({
					type:'GET',
					url:'http://localhost:8080/Extia/web/app_dev.php/supprimer/'+supid,
					timeout: 3000,
					success: function(){
						$("#tr_"+supid+"").hide("slow");
					},
					error:function(){
					alert("article numéro "+supid+" n'est pas supprimer");
					}
			});

		});
	});

		
		
