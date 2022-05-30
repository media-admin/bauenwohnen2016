<div id="welle1"></div>
<footer>
	<div class="inner" style="padding: 30px 0;border-bottom: 1px solid #1b1b1b;">
    	<?php
if(is_active_sidebar('footer-sidebar-1')){
dynamic_sidebar('footer-sidebar-1');
}
?>

<?php
if(is_active_sidebar('footer-sidebar-2')){
dynamic_sidebar('footer-sidebar-2');
}
?>

<?php
if(is_active_sidebar('footer-sidebar-3')){
dynamic_sidebar('footer-sidebar-3');
}
?>
<div style="clear:left;"></div>
    </div>
</footer>    

<div id="footer">
	<div class="inner" style="padding: 10px 0 10px;">
	<?php
if(is_active_sidebar('footer-sidebar-4')){
dynamic_sidebar('footer-sidebar-4');
}
?></div>
</div>

</div>

<?php wp_footer(); ?>

<script>
jQuery(function() {
   // zinsrechner
    var $calc = jQuery('.calculator');
		console.log('calculator: '+$calc);
    if ($calc.length > 0) {

        var t = '<h4 style="color: #921a16;">Mietzins-Rechner</h4>Berechnen Sie selbst, wie sich Ihre derzeitige Miete auf Basis des aktuellen Mietindexes in den nächsten 30 Jahren entwickelt! Und sehen Sie, wieviel Sie Ihrem Vermieter bezahlen!';
        var $t = jQuery('<div/>', {'html': t});

        var $d1 = jQuery('<div/>').append(
            $t,
            jQuery('<div/>').append(
                '<br/>aktuelle Miete<br/>',
                '<form><div class="form-group"><label class="sr-only" for="miete"></label><input type="text" class="miete form-control"/></div><button type="button" class="wpcf7-submit">Ausrechnen</button></form>'
            )
        );
        var $d2 = jQuery('<div/>').hide();
        $calc.append($d1, $d2).after('<br/>');

        $calc.on('mouseup', 'input', function (ev) {
            if (ev.keyCode == 13) {
                calc();
            }
        }).on('click', 'button', calc);
    }

    function calc(){
        var akt_m = $calc.find('input').val();
        if(akt_m){
            if(!isNaN(akt_m) && akt_m >= 0 && akt_m != ""){
                var proz = 2.7;
                var jahre = 30;

                var miete = 2.16542*akt_m;

                var miete_gesamt = 0;
                var miete_jahr = akt_m;
                var i;

                for (i = 0; i < jahre; i++){
                    miete_gesamt = akt_m*543.95112;
                }

                var h = $d1.height();
                $calc.height(h);
                $d1.fadeOut(300,function(){
                    $d2.empty()
                        .append(
                        '<h4 style="color: #921a16;">Mietzins-Rechner Ergebnis</h4><p>Diese monatliche Miete m&uuml;ssen Sie in 30 Jahren bezahlen: <strong style="color: #921a16;">'+format(miete)+' &euro;</strong><br/>Diese Summe haben Sie in 30 Jahren f&uuml;r jemanden anderen ausgegeben: <strong style="color: #921a16;">'+format(miete_gesamt)+' &euro;</strong></p>',
                        jQuery('<a href="#" id="rechnerclose" style="float:right">zur&uuml;ck</a>').click(function(ev){
                            $d2.fadeOut(300,function(){
                                $d1.fadeIn(500);
                                $calc.animate({'height':$d1.height() + 50},500);
                            });
                            ev.preventDefault();
                        })
                    )

                        .fadeIn(500);
                    $calc.animate({'height':$d2.height() + 50},500);
                });
            }
        }
    }
    function format(value){
        var nr = String(Math.round(value*100)/100).split('.');
        var nnr = [];
        jQuery.each(nr[0].split('').reverse(),function(i,n){
            if(i>0&&i%3==0){ nnr.push('.'); }
            nnr.push(n);
        });
        return nnr.reverse().join('')+','+nr[1];
    }	
}); // End of Document-Ready
	</script>
 <!-- footer -->
</body>
</html>