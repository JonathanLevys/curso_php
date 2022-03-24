# curso_php

clonar o projeto para maquina local
```
git clone https://github.com/JonathanLevys/curso_php.git
```

mostra arquivos modificados
```
git status
```

adicionando modificação
```
git add (nome_do_arquivo)
```

adiconando comentario para alterações, ou codigo novo
```
git commit -m "qualquer comentario"
```

verifica as mudanças no arquivo
```
git show 0790e9e
```

envia os arquivos para o repositorio
```
git push origin main
```

mostrar as ramificações ou filias, ou filial atual
```
git branch
```

criar uma nova ramificações ou filial do projeto
```
git branch aula00
```
troca de pasta
```
git checkout aula04
```
Exclui branch
```
git branch -D aula07
```
comando que mergia(unir) branch
```
git merge aula04 (nome da branch)
``` 
puxa os arquivos do repositorio
```
git pull origin main
```
Cria nova branch e já troca para ela.
```
git checkout -b aula07
```
Puxa novas branch criadas por outros usuários.
```
git fetch --all
```
Salva codigos temporarios
```
git stash save "comentario"
```
Lista todos os codigos temporarios
```
git stash --list
```
Recuperar os codigos pelo list, com valor numerico 'stash@{0}'
```
git stash apply 0
```
Apaga os codigos temporarios
```
git stash drop 0
```