Mr.Lista indítási metódus:
1.El kell indítani a dockert.
2. a git repositoryt le kell klónozni ehhez a link: https://github.com/Laureent/Bevasarlo.git
3.Windows esetén instal.bat indítása. Mac/Linux esetén instal.sh elindítása. Ez létre fogja hozni a docker konténert és az alkalmazás indítható lesz.
4.A bevasarlo mappában meg kell nyitni egy cmd-t és a "docker-compose exec php php artisan migrate" parancsot kell beírni.
5.Egy tetszőleges böngészőben a"localhost:8881"-en el lehet érni az alkalmazást.


Az alkalmazás használata:
A megjelenő bevitelimezőkbe meg lehet adni a felvenni kívánt terméket és vásárolni kívánt mennyiséget majd a "+" gomb megnyomásával hozzá lehet adni a bevásárló listához.
Törölni a megjelenő termék mellett a piros "X" gomb megnyomásával lehet törölni a terméket ami meg van vásárolva vagy hibásan lett felvéve.