# A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno), o algoritmo deve imprimir um recibo mostrando o nome do livro, o tipo de usuário por extenso e o total de dias de empréstimo.
# Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias.


# Documentação:

Comandos:
    -composer install
    -cp .env.example .env
    -php artisan key:generate

Configurações:
    -Criar database com nome "book-reservation"
    -php artisan migrate
    -Inserir dois registros sendo: "id: 1, nome: Aluno" e "id: 2, nome: "Professor"
    -php artisan serve
    -Garantir que o servidor esteja respondendo na seguinte URL: http://127.0.0.1:8000