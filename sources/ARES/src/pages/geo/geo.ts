import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { Geolocation } from '@ionic-native/geolocation';
import { Platform } from 'ionic-angular';

/**
 * Generated class for the GeoPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-geo',
  templateUrl: 'geo.html',
})
export class GeoPage {
  private lat: number;
  private lng: number;

  constructor(
    public navCtrl: NavController,
    public navParams: NavParams,
    private platform: Platform,
    private geolocation: Geolocation,
   ) {
    platform.ready().then(() => {

      geolocation.getCurrentPosition().then(geoPosition => {
        this.lat = geoPosition.coords.latitude;
        this.lng = geoPosition.coords.longitude;
        console.log('lat: ' + geoPosition.coords.latitude + ', lon: ' + geoPosition.coords.longitude);
      }).catch((e) => console.log(e));

      /*
      const watch = geolocation.watchPosition().subscribe(pos => {
        console.log('lat: ' + pos.coords.latitude + ', lon: ' + pos.coords.longitude);
      });

      // to stop watching
      watch.unsubscribe();*/

    });



  }




  ionViewDidLoad() {
    console.log('ionViewDidLoad GeoPage');

  }}
