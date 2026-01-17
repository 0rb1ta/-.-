// Индикатор активности пользователей (с cookies)
class ActivityIndicator {
    constructor() {
        this.statusElement = null;
        this.countElement = null;
        this.updateInterval = 5000; // Обновляем статус каждые 5 сек
        this.init();
    }

    init() {
        this.statusElement = document.getElementById('activity-status');
        this.countElement = document.getElementById('active-users-count');

        if (!this.statusElement || !this.countElement) {
            return;
        }

        // ← ДОБАВЛЕНО: первое обновление
        this.updateStatus();

        // ← ДОБАВЛЕНО: повторяем каждые 3 сек
        setInterval(() => this.updateStatus(), this.updateInterval);
    }

    updateStatus() {
        fetch('/api/api-heartbeat.php?action=get-status', {
            credentials: 'include'
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                this.render(data);
            }
        })
        .catch(err => {
            // Ошибка - игнорируем молча
        });
    }

    render(data) {
        const { activeRunning, total } = data;

        if (this.countElement) {
            this.countElement.textContent = activeRunning;
        }

        if (this.statusElement) {
            if (activeRunning > 0) {
                this.statusElement.className = 'status-indicator active';
                this.statusElement.title = `Активных пользователей: ${activeRunning}`;
            } else {
                this.statusElement.className = 'status-indicator inactive';
                this.statusElement.title = 'Нет активных пользователей';
            }
        }
    }
}

// Инициализируем при загрузке DOM
document.addEventListener('DOMContentLoaded', () => {
    new ActivityIndicator();
});
