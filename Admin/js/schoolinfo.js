            


            $(document).ready(function () {
 
            var list1 = document.getElementById('firstList');
             
            list1.options[0] = new Option('--Select--', '');
            list1.options[1] = new Option('Bahan', 'Bahan');
            list1.options[2] = new Option('Hlaing', 'Hlaing');
            list1.options[3] = new Option('Yankin', 'Yankin');


            var list1 = document.getElementById('firstList');
            var list2 = document.getElementById("secondList");
            var list1SelectedValue = list1.options[list1.selectedIndex].value;
            list2.options.length=0;

            });



            function getschool(){
 
            var list1 = document.getElementById('firstList');
            var list2 = document.getElementById("secondList");
            var list1SelectedValue = list1.options[list1.selectedIndex].value;
             
            if (list1SelectedValue=='Bahan')
            {
                 
                list2.options.length=0;
                list2.options[0] = new Option('--Select--', '');
                list2.options[1] = new Option('Bahan 1', 'Bahan 1');
                list2.options[2] = new Option('Bahan 2', 'Bahan 2');
                list2.options[3] = new Option('Bahan 3', 'Bahan 3');
                list2.options[4] = new Option('Bahan 4', 'Bahan 4');
                list2.options[5] = new Option('Bahan 5', 'Bahan 5');
                 
            }
            else if (list1SelectedValue=='Hlaing')
            {
                 
                list2.options.length=0;
                list2.options[0] = new Option('--Select--', '');
                list2.options[1] = new Option('Hlaing 1', 'Hlaing 1');
                list2.options[2] = new Option('Hlaing 2', 'Hlaing 2');
                list2.options[3] = new Option('Hlaing 3', 'Hlaing 3');
                list2.options[4] = new Option('Hlaing 4', 'Hlaing 4');
                list2.options[5] = new Option('Hlaing 5', 'Hlaing 5');
                 
            }
             else if (list1SelectedValue=='Yankin')
            {
                 
                list2.options.length=0;
                list2.options[0] = new Option('--Select--', '');
                list2.options[1] = new Option('Yankin 1', 'Yankin 1');
                list2.options[2] = new Option('Yankin 2', 'Yankin 2');
                list2.options[3] = new Option('Yankin 3', 'Yankin 3');
                list2.options[4] = new Option('Yankin 4', 'Yankin 4');
                list2.options[5] = new Option('Yankin 5', 'Yankin 5');
                 
            }
			}