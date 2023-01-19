<?php foreach ($menuUtama as $row) : ?>
    <?php if ($row['tipe'] == 'Default') : ?>
        <li class="nav-item"><a href="<?= $row['href']; ?>" class="nav-link" <?= ($row['new_tab'] == 1) ? 'target="_blank"' : '' ?>><?= $row['title']; ?></a></li>
    <?php elseif ($row['tipe'] == 'Dropdown') : ?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                <?= $row['title']; ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php foreach ($allMenu as $allMenu1) : ?>
                    <?php if ($allMenu1['parent_id'] == $row['id_menu']) : ?>
                        <?php if ($allMenu1['tipe'] == 'Default') : ?>
                            <li><a class="dropdown-item" href="<?= $allMenu1['href']; ?>" <?= ($allMenu1['new_tab'] == 1) ? 'target="_blank"' : ''; ?>><?= $allMenu1['title']; ?></a></li>
                        <?php elseif ($allMenu1['tipe'] == 'Dropdown') : ?>
                            <li class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <?= $allMenu1['title']; ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php foreach ($allMenu as $allMenu2) : ?>
                                        <?php if ($allMenu2['parent_id'] == $allMenu1['id_menu']) : ?>
                                            <?php if ($allMenu2['tipe'] == 'Default') : ?>
                                                <li><a class="dropdown-item" href="<?= $allMenu2['href']; ?>" <?= ($allMenu2['new_tab'] == 1) ? 'target="_blank"' : ''; ?>><?= $allMenu2['title']; ?></a></li>
                                            <?php elseif ($allMenu2['tipe'] == 'Dropdown') : ?>
                                                <li class="nav-item dropdown dropend">
                                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                        <?= $allMenu2['title']; ?>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <?php foreach ($allMenu as $allMenu3) : ?>
                                                            <?php if ($allMenu3['parent_id'] == $allMenu2['id_menu']) : ?>
                                                                <?php if ($allMenu3['tipe'] == 'Default') : ?>
                                                                    <li><a class="dropdown-item" href="<?= $allMenu3['href']; ?>" <?= ($allMenu3['new_tab'] == 1) ? 'target="_blank"' : ''; ?>><?= $allMenu3['title']; ?></a></li>
                                                                <?php elseif ($allMenu3['tipe'] == 'Dropdown') : ?>
                                                                    <li class="nav-item dropdown dropend">
                                                                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                                            <?= $allMenu3['title']; ?>
                                                                        </a>
                                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                            <?php foreach ($allMenu as $allMenu4) : ?>
                                                                                <?php if ($allMenu4['parent_id'] == $allMenu3['id_menu']) : ?>
                                                                                    <?php if ($allMenu4['tipe'] == 'Default') : ?>
                                                                                        <li><a class="dropdown-item" href="<?= $allMenu4['href']; ?>" <?= ($allMenu4['new_tab'] == 1) ? 'target="_blank"' : ''; ?>><?= $allMenu4['title']; ?></a></li>
                                                                                    <?php elseif ($allMenu4 == 'Dropdown') : ?>
                                                                                        <li class="nav-item dropdown dropend">
                                                                                            <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                                                                <?= $allMenu4['title']; ?>
                                                                                            </a>
                                                                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                                                <?php foreach ($allMenu as $allMenu5) : ?>
                                                                                                    <?php if ($allMenu5['parent_id'] == $allMenu4['id_menu']) : ?>
                                                                                                        <?php if ($allMenu5['tipe'] == 'Default') : ?>
                                                                                                            <li><a class="dropdown-item" href="<?= $allMenu5['href']; ?>" <?= ($allMenu5['new_tab'] == 1) ? 'target="_blank"' : ''; ?>><?= $allMenu5['title']; ?></a></li>
                                                                                                        <?php elseif ($allMenu5['tipe'] == 'Dropdown') : ?>
                                                                                                            <li class="nav-item dropdown dropend">
                                                                                                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                                                                                    <?= $allMenu5['title']; ?>
                                                                                                                </a>
                                                                                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                                                                    <?php foreach ($allMenu as $allMenu6) : ?>
                                                                                                                        <?php if ($allMenu6['parent_id'] == $allMenu5['id_menu']) : ?>
                                                                                                                            <?php if ($allMenu6['tipe'] == 'Default') : ?>
                                                                                                                                <li><a class="dropdown-item" href="<?= $allMenu6['href']; ?>" <?= ($allMenu6['new_tab'] == 1) ? 'target="_blank"' : ''; ?>><?= $allMenu6['title']; ?></a></li>
                                                                                                                            <?php elseif ($allMenu6['tipe'] == 'Dropdown') : ?>
                                                                                                                                <li class="nav-item dropdown dropend">
                                                                                                                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                                                                                                        <?= $allMenu6['title']; ?>
                                                                                                                                    </a>
                                                                                                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                                                                                        <?php foreach ($allMenu as $allMenu7) : ?>
                                                                                                                                            <?php if ($allMenu7['parent_id'] == $allMenu6['id_menu']) : ?>
                                                                                                                                                <li><a class="dropdown-item" href="<?= $allMenu7['href']; ?>" <?= ($allMenu7['new_tab'] == 1) ? 'target="_blank"' : ''; ?>><?= $allMenu7['title']; ?></a></li>
                                                                                                                                            <?php endif; ?>
                                                                                                                                        <?php endforeach; ?>
                                                                                                                                    </ul>
                                                                                                                                </li>
                                                                                                                            <?php endif; ?>
                                                                                                                        <?php endif; ?>
                                                                                                                    <?php endforeach; ?>
                                                                                                                </ul>
                                                                                                            </li>
                                                                                                        <?php endif; ?>
                                                                                                    <?php endif; ?>
                                                                                                <?php endforeach; ?>
                                                                                            </ul>
                                                                                        </li>
                                                                                    <?php endif; ?>
                                                                                <?php endif; ?>
                                                                            <?php endforeach; ?>
                                                                        </ul>
                                                                    </li>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </li>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endif; ?>
<?php endforeach; ?>