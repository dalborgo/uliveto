//Translating the months names
Date.monthNames = [
    "Gennaio", "Febbraio", "Marzo",
    "Aprile", "Maggio", "Giugno",
    "Luglio", "Agosto", "Settembre",
    "Ottobre", "Novembre", "Dicembre"
];


//Translating he DatePicker component labels
if(Ext.DatePicker) {


    Ext.apply(Ext.DatePicker.prototype, {
        dayText		: 'Giorno',
        monthText	: 'Mese',
        yearText	        : 'Anno'
    });

}