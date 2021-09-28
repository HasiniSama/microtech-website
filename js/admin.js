/* [ Filter ] */
function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }       
    }
}

/* [ Sort ] */
function sortTable() {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("myTable");
    switching = true;

    while (switching) {
      switching = false;
      rows = table.rows;

      for (i = 1; i < (rows.length - 1); i++) {
        shouldSwitch = false;
        x = rows[i].getElementsByTagName("TD")[0];
        y = rows[i + 1].getElementsByTagName("TD")[0];
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
      if (shouldSwitch) {
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
}

/* [ Pie Charts ] */

const ctx1 = document.getElementById('mychart1').getContext('2d');
let mychart1 = new Chart(ctx1,{

    type:'pie',
    data: {

        labels: ['Smart Phones','Smart Watches', 'Tablets', 'Laptops', 'Audio', 'Accessories'],
        datasets : [
            {
                label:'# of votes',
                data: [Smart_Phones,Smart_Watches,Tablets,Laptops,Audio,Accessories],
                backgroundColor:['#717fe0','#7180e0cd','#7180e092','#7180e068','#7180e043','#7180e01d'],
                borderWidth:1
            }
        ]
    }
})

const ctx2 = document.getElementById('mychart2').getContext('2d');
let mychart2 = new Chart(ctx2,{

    type:'pie',
    data: {

        labels: ['Apple', 'Samsung', 'Huawei', 'Sony'],
        datasets : [
            {
                label:'# of votes',
                data: [Apple,Samsung,Huawei,Sony],
                backgroundColor:['#717fe0','#7180e0cd','#7180e092','#7180e068'],
                borderWidth:1
            }
        ]
    }
})





