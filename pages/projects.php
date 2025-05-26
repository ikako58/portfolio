<section class="projects">
    <div class="container">
        <h2 class="section-title">My <span>Projects</span></h2>
        <p class="section-subtitle">Here are some of my recent projects. Click on each to learn more.</p>
        
        <div class="projects-grid">
            <?php foreach (getProjects() as $project): ?>
                <div class="project-item">
                    <img src="assets/images/<?= htmlspecialchars($project['image']) ?>" 
                         alt="<?= htmlspecialchars($project['title']) ?>" 
                         class="project-image">
                    <div class="project-overlay">
                        <div class="project-content">
                            <h3><?= htmlspecialchars($project['title']) ?></h3>
                            <p class="project-description"><?= htmlspecialchars($project['description']) ?></p>
                            
                            <div class="project-technologies">
                                <?php foreach ($project['technologies'] as $tech): ?>
                                    <span class="tech-tag"><?= $tech ?></span>
                                <?php endforeach; ?>
                            </div>
                            
                            <div class="project-links">
                                <a href="<?= htmlspecialchars($project['demo_url']) ?>" 
                                   target="_blank" 
                                   class="demo-link">
                                    <i class="fas fa-external-link-alt"></i> Live Demo
                                </a>
                                <a href="<?= htmlspecialchars($project['code_url']) ?>" 
                                   target="_blank" 
                                   class="code-link">
                                    <i class="fab fa-github"></i> View Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>