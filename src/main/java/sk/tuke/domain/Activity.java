package sk.tuke.domain;
import org.springframework.roo.addon.javabean.RooJavaBean;
import org.springframework.roo.addon.jpa.activerecord.RooJpaActiveRecord;
import org.springframework.roo.addon.tostring.RooToString;
import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;
import java.util.Date;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import org.springframework.format.annotation.DateTimeFormat;
import javax.persistence.ManyToOne;
import java.util.HashSet;
import java.util.Set;
import javax.persistence.CascadeType;
import javax.persistence.ManyToMany;

@RooJavaBean
@RooToString
@RooJpaActiveRecord
public class Activity {

    /**
     */
    @NotNull
    @Size(min = 3)
    private String nameOfActivity;

    /**
     */
    private Float hourlyWage;

    /**
     */
    private Float timeToFinish;

    /**
     */
    @Temporal(TemporalType.TIMESTAMP)
    @DateTimeFormat(style = "M-")
    private Date dateOfTermination;

    /**
     */
    @NotNull
    @ManyToOne
    private Project project;

    /**
     */
    @ManyToMany(cascade = CascadeType.ALL)
    private Set<Users> users = new HashSet<Users>();
}
