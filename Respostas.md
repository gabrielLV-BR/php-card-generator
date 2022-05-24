### **Questão 1**
Foi necessário fechar a tag PHP e inserir a linha

```php
print_r($_POST)
```

### **Questão 2**
(*a*) O método *default* é o *GET*

(*b*) O método *GET* insere as informações enviadas na URL da página, enquanto o *POST* as insere na própria requisição.

(*c*) No caso de um formulário de login ou de cadastro o envio das informações pelo método _POST_ seria o mais adequado por não exibir os dados pessoais do usuário pelo URL

### **Questão 3**
(*a*) A função _htmlspecialchars_ substitui os caracteres especiais do HTML por entidades do HTML, representadas pelo caracter _&_ + um identificador.

(*b*) Essa função substitui os caracteres especiais do HTML por entidades do HTML, o que remove a possiblidade dos caracteres especiais serem interpretados como tags ao invés de texto puro

(*c*) A função _issset_ verifica se a variável existe ou não, sem causar um erro

### *Questão 4*

(*a*) Loopamos sobre cada entrada do _$\_POST_ com o _foreach_. Utilizamos a chave e o valor para compor uma tabela por meio de _echo_.

(*b*) Os campos novos iriam compor a tabela automaticamente devido ao uso da função _foreach_, que modulariza a criação da mesma.

### *Questão 5*
_[Ver arquivo](./home4.php)_

### *Questão 6*

(*a*) Se o arquivo for pequeno, até é possível, visto que pode ser codificado nos parâmetros da requisição (cujo limite é em torno de 2000, por isso só é possível se o arquivo for pequeno). Contudo, é fortemente recomendado que se utilize _$\_POST_, por causa da descrição e por maior limite de transferência.

(*b*) _$\_FILES_

(*c*) 
```php 
$_FILES['userfile']['name'];
$_FILES['userfile']['type'];
```

(*d*) Essa função recebe como parâmetro o nome do arquivo (que foi feito o upload) e seu destino, assim movendo o memsmo até seu diretório especificado.

---

Copyright `Felipe and Gabriel Productions`&trade; <br>
All rights reserved.