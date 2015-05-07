/**
 * Created by AbdullahAlkawai on 5/6/15.
 */

function Sudoku(index)
{
    var puzzle = puzzles[index];
    var answer = answers[index];
    //console.log(puzzle);
    var sudokuTable = document.getElementById("gameform");
    var tableButton = sudokuTable.getElementsByTagName("button");

    for(var i=0; i<81; i++) { //the main loop

        var buttonVal = tableButton[i].value;

        var row = buttonVal.charAt(0);
        var col = buttonVal.charAt(2);


        if (row == 2 || row == 5) {
            tableButton[i].parentNode.className = "rowborder";
        }

        if (col == 2 || col == 5) {
            tableButton[i].parentNode.className = "colborder";

            if (row == 2 || row == 5 ) {
                tableButton[i].parentNode.className = "rowcolborder";
            }

        }
        var value = puzzle[row][col];
        var ans = answer[row][col];
        //console.log(value);
        //console.log(ans);
        if(value == ans){
            //console.log(value);
            tableButton[i].innerText = value;
        }
    }
}


function cellClicked(item) {
    event.preventDefault();
    console.log(item.innerText);
    var row = item.value.charAt(0);
    var col = item.value.charAt(2);
    window.location.href="./cellClicked.php?r="+row+"&c="+col;
}