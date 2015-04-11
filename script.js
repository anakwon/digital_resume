$(document).ready(function() {
        $('.side_nav a').click(function() {
            $('body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 500);
            return false;
        });
        $(window).scroll(function() {
            console.log('scrolled to ', $(document).scrollTop());
            if ($(document).scrollTop() != 0) {
                $("#topleftnav span").hide();
            } else {
                $("#topleftnav span").show();
            }
        });

        var trackOutboundLink = function(url) {
            ga('send', 'event', 'outbound', 'click', 'url', {
                    'hitCallback': function() {
                        document.location = url;
                    }

                }
            });