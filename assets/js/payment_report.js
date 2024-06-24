$('#payment-report-table').DataTable({
    "language": {
        "lengthMenu": "Show _MENU_",
    },
    "dom":
        "<'row'" +
        "<'col-sm-6 d-flex mb-5 align-items-center justify-content-start'f>" +
        "<'col-sm-6 text-end'>" +
        ">" +

        "<'table-responsive'tr>" +

        "<'row'" +
        "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'l>" +
        "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
        ">", "ordering": false
});

var invoiceModal = new bootstrap.Modal(document.getElementById("invoice-modal"), {});

$('.print-invoice').click(function () {
    var htmlPath = $(this).attr('html-invoice');
    var invoiceModalBody = $('#invoice-body');
    var printThis = $('#printThis');
    var htmlInvoice;

    $.get(htmlPath, function (html_string) {
        htmlInvoice = html_string;
        console.log(html_string);
    }, 'html').then(function () {
        invoiceModalBody.html(htmlInvoice);
        printThis.html(htmlInvoice);
    });

    invoiceModal.show();
})

$('#print-btn').click(function () {
    printElement(document.getElementById("printThis"));
    window.print();
})

function printElement(elem) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    $printSection.innerHTML = "";

    $printSection.appendChild(domClone);
}