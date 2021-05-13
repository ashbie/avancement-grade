$(document).ready(function(){
			$(".btn_a").click(function(){
				$(".btn_a").hide(function(){
					$(".form1").show();
				});
			$("rubrique").change(function(){
				               alert("The text has been changed.");
			            })
			})
		})