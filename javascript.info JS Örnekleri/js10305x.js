// js10305x.js: Yarattýðýmýz fonksiyonu doðru ve yanlýþ verilerle test etme alt-örneði.
describe ("üs", function() {
    describe ("x üzeri 3'ü hesaplar", function() {
        function testEt (x) {
            let umulan = x * x * x;
            it (`${x} üzeri 3 eþittir ${umulan}`, function() {assert.equal (üs (x, 3), umulan);});
        } // func sonu...
        for (let x = 1; x <= 5; x++) {testEt (x);}
    }); // des.. sonu...
    it ("eðer n negatifse, sonuç NaN'dýr", function() {assert.isNaN (üs (2, -1));});
    it ("eðer n tamsayý deðilse, sonuç NaN'dýr", function() {assert.isNaN (üs (2, 1.5));});
}); // des.. sonu...