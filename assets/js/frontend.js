$(document).ready(function() {
	$(".scrollTop").click(function(e) {
		e.preventDefault();
		var target = $(this).data("target");
		var off = $(target).offset();
		$("body,html").animate({ scrollTop: off.top - 80 }, 1200);
	});
	$(".navbar-toggler").click(function() {
		$(".navbar-top").toggleClass("clicked");
		$(".navbar-top.clicked li a").click(function() {
			$(".navbar-top").removeClass("clicked");
			$(".navbar-collapse").removeClass("show");
		});
	});
	$(".search").click(function(e) {
		e.preventDefault();
		$(".search-modal").addClass("show");
	});
	$(".search-modal .close").click(function() {
		$(".search-modal").removeClass("show");
	});
	$(".img-topik").owlCarousel({
		animateOut: "fadeOut",
		autoPlay : true,
		loop: true,
		items: 6,
		responsive: {
			0: {
				items: 2
			},
			600: {
				items: 4
			},
			1000: {
				items: 6
			}
		}
	});

	function filterTA(thisParam) {
		var url = $("#filterTA").attr("action");
		var data;
		var tipe;
		if (thisParam.attr("data-topik") != "") {
			data = { id_topik: thisParam.data("topik"), id_prodi: "" };
			tipe = "link";
		} else {
			tipe = thisParam.attr("id") == "filterTA" ? "form" : "search";
			data = thisParam.serializeArray();
		}
		$("#null-ta").html("");

		$.ajax({
			type: "get",
			data: data,
			url: url,
			beforeSend: function() {
				$(".loading").addClass("show");
			},
			success: function(response) {
				$(".loading").removeClass("show");
				if (response != "error") {
					$("#tableTA tbody tr").remove();
					if (response.length == 0) {
						$("#null-ta").html("Data Kosong");
					}
					$.each(response, function(i, item) {
						i++;
						$("#tableTA tbody").append(`
                        <tr>
                            <td>${i}</td>
                            <td>
								<h6 class="ls-5 color-blue font-weight-bold">
								${item.Judul_TA}
                                </h6>    
								<p class="text-color ls-5">
								${item.Deskripsi}
                                </p>
                                <p class="label"> <span class="${item.icon}"></span> ${item.topik}
                                    <a href=""class="float-right color-green mr-3">${item.nama_mhs}</a> 
                                </p>
                            </td>
                        </tr>`);
					});

					if (tipe != "form") {
						var off = $("#tableTA").offset();
						$("body,html").animate({ scrollTop: off.top - 80 }, 1200);
					}
					if (tipe == "search") {
						$(".search-modal").removeClass("show");
					}
				}
			}
		});
	}

	$("#filterTA").submit(function(e) {
		e.preventDefault();
		filterTA($(this));
	});
	$("#filterSearch").submit(function(e) {
		e.preventDefault();
		filterTA($(this));
	});
	$(".filter-topik").click(function(e) {
		e.preventDefault();
		filterTA($(this));
	});
});
