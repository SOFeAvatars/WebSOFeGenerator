function run() {
	$("#color, #bgcolor, #rotation").change(function() {
		$("#avatar").attr("src", "sofeavatar.php?hex=" + $("#color").val() + "&bghex=" + $("#bgcolor").val() + "&rot=" + $("#rotation").val());
	});

	$("#random").click(function() {
		document.getElementById("color").jscolor.fromRGB(getrandcol(), getrandcol(), getrandcol());
		document.getElementById("bgcolor").jscolor.fromRGB(getrandcol(), getrandcol(), getrandcol());
		$("#rotation").val(getrandrot());
		$("#avatar").attr("src", "sofeavatar.php?hex=" + $("#color").val() + "&bghex=" + $("#bgcolor").val() + "&rot=" + $("#rotation").val());
	});

	$("#download").click(function() {
		$.fileDownload("sofeavatar.php?hex=" + $("#color").val() + "&bghex=" + $("#bgcolor").val() + "&rot=" + $("#rotation").val()+"&dodownload");
	});
}

function getrandcol() {
	return Math.floor((Math.random() * 255) + 0);
}

function getrandrot() {
	$rand = Math.floor((Math.random() * 4) + 1);
	if ($rand == 1) {
		return 0;
	} else if ($rand == 2) {
		return 90;
	} else if ($rand == 3) {
		return 180;
	} else if ($rand == 4) {
		return 270;
	}
}
