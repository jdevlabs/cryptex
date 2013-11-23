/**
 * Vibrate 1.0
 *
 * Makes an element vibrate
 *
 * Usage: jQuery('#my-annoying-ad').vibrate();
 *
 * @class vibrate
 * @param {Object} conf, custom config-object
 *
 * Copyright (c) 2008 Andreas Lagerkvist (andreaslagerkvist.com)
 * Released under a GNU General Public License v3 (http://creativecommons.org/licenses/by/3.0/)
 */
jQuery.fn.vibrate = function(conf)
{
  var config = jQuery.extend({
        speed: 30,
        duration: 1000,
        frequency: 10000,
        spread: 3
      }, conf);

  return this.each(function()
  {
    var t = jQuery(this);

    var vibrate = function()
    {
      var topPos = Math.floor(Math.random() * config.spread) - ((config.spread - 1) / 2);
      var leftPos = Math.floor(Math.random() * config.spread) - ((config.spread - 1) / 2);
      var rotate = Math.floor(Math.random() * config.spread - (config.spread - 1) / 2); // cheers to erik@birdy.nu for the rotation-idea
      t.css({position: 'relative', left: leftPos +'px', top: topPos +'px', WebkitTransform: 'rotate(' +rotate +'deg)'});
    };

    var doVibration = function ()
    {
      var vibrationInterval = setInterval(vibrate, config.speed);

      var stopVibration = function()
      {
        clearInterval(vibrationInterval);
        t.css({position: 'static'});
      };

      setTimeout(stopVibration, config.duration);
    };

  doVibration();
  });
};
