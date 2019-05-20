;git init

;pause "Criou o repositório"

;git remote add origin https://github.com/araujolops/ensistmailer.git/

;pause "Adicionou o Repositório Remoto em local"

;git pull origin master --allow-unrelated-histories

pause "Mostra as pastas que serão enviadas ao repositório"

git status

pause "Adicionou os arquivos alterados"

git add .

pause "Commita os arquivos"

git commit -m "Initial Commit"

pause "Atualiza o Remoto vai pedir usuário e senha" 

git push origin master