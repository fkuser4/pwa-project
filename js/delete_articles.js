document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.delete-btn').forEach(function (button) {
        button.addEventListener('click', function () {
            if (confirm('Are you sure you want to delete this article?')) {
                const articleId = this.getAttribute('data-id');
                fetch('../delete_article.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'id=' + articleId
                })
                    .then(response => response.text())
                    .then(data => {
                        if (data === 'success') {
                            this.parentElement.parentElement.remove();
                            location.reload();
                        } else {
                            console.log('Server response:', data);
                            alert('Error deleting article');
                        }
                    });
            }
        });
    });
});