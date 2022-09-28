<tr>
    <th scope="row">Anket 2</th>
    <td><?php if($sumOfBalikesir > $sumOfEskisehir && $sumOfBalikesir > $sumOfCanakkale){
            echo "Balıkesir " . $sumOfBalikesir . " kişi tarafından " . "%" . (int)(($sumOfBalikesir*100)/$sumOfSurvey2) . " oranında seçilmiş" . "<br>";
        }elseif ($sumOfEskisehir > $sumOfBalikesir && $sumOfEskisehir > $sumOfCanakkale){
            echo "Eskişehir " . $sumOfEskisehir . " kişi tarafından " . "%" . (int)(($sumOfEskisehirOfPHP*100)/$sumOfSurvey2) . " oranında seçilmiş" . "<br>";
        }else {
            echo "Çanakkale " . $sumOfCanakkale . " kişi tarafından " . "%" . (int)(($sumOfCanakkale*100)/$sumOfSurvey2) . "  oranında seçilmiş" . "<br>";
        } ?></td>
</tr>