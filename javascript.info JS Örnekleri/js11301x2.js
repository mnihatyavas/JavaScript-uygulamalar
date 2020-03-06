// js11301x2.js
export let ad ="M.Nihat Yavaþ";
export let idareci = {ad: "Jale"};
export function selam (kullanici) {console.log (`Merhaba, ${kullanici}; sitemize hoþgeldin!`);}

export let idareci2 = {};
export function selam2() {console.log (`Size hizmet sunmaya hazýrýz, sayýn ${idareci2.ad}!`); }

let aylar = ['Ocak', 'Þubat', 'Mart', 'Nisan', "Mayýs", "Haziran", "Temmuz", 'Aðustos', 'Eylül', 'Ekim', 'Kasým', 'Aralýk'];
const MODULLERIN_STANDART_OLDUKLARI_YIL = 2015;
class Kullanici {constructor (isim) {this.isim = isim;} }
export {aylar, Kullanici};
export {MODULLERIN_STANDART_OLDUKLARI_YIL as sene};